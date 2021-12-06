<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $surname
 * @property string|null $companyRole
 * @property string|null $personalPhone
 * @property string|null $companyName
 * @property int|null $companyCategory
 * @property string|null $companyLocation
 * @property string|null $companyPhone
 * @property string|null $companyTeamSize
 * @property string|null $companyWebSite
 * @property string|null $companyLogo
 * @property string|null $companyFounded
 * @property string|null $companyAbout
 * @property int $isActive
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyFounded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyTeamSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyWebSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePersonalPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSurname($value)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'companyRole',
        'personalPhone',
        'companyName',
        'companyCategory',
        'companyLocation',
        'companyPhone',
        'companyTeamSize',
        'companyWebSite',
        'companyLogo',
        'companyFounded',
        'companyAbout',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'isActive' => 'boolean',
    ];
}
