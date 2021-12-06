<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SettingsModel
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $siteName
 * @property string $siteUrl
 * @property string $siteLogo
 * @property string $siteFavicon
 * @property string $facebook
 * @property string $instagram
 * @property string $linkedin
 * @property string $youtube
 * @property string $twitter
 * @property int $isMaintenance
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereIsMaintenance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereSiteFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereSiteLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereSiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereSiteUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereYoutube($value)
 * @mixin \Eloquent
 * @property string $shortAboutUs
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsModel whereShortAboutUs($value)
 */
class SettingsModel extends Model
{
    use HasFactory;
    protected $table = 'settings';

    /**
     * @return Model
     */
    public function prepareSettings(): Model
    {
        return $this->find(1);
    }
}
