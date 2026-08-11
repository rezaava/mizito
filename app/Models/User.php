<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use App\Models\Workspace;
use App\Models\Project;
use App\Models\Task;
use App\Models\Chat;
use App\Models\Message;



class User extends Authenticatable implements LaratrustUser
{

    use HasRolesAndPermissions;

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ownedWorkspaces(){
        return $this->hasMany(Workspace::class);
    }

    public function workspaced(){
        return $this->belongsToMany(Workspace::class);
    }
    public function projects(){
        return $this->belongsToMany(Project::class);
    }

    public function tasks(){
        return $this->belongsToMany(Task::class);
    }

        public function chatsUserOne()
    {
        return $this->hasMany(Chat::class, 'user_one_id');
    }

    public function chatsUserTwo()
    {
        return $this->hasMany(Chat::class, 'user_two_id');
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
}
