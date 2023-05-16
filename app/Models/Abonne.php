<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $age
 * @property int    $idmotivation
 * @property string $nom
 * @property string $prenom
 * @property string $profession
 * @property string $rue
 * @property string $codePostal
 * @property string $ville
 * @property string $pays
 * @property string $telephone
 * @property string $email
 */
class Abonne extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    use HasFactory;
    protected $table = 'abonne';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'age', 'sexe', 'profession', 'rue', 'codePostal', 'ville', 'pays', 'telephone', 'email', 'idmotivation'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'nom' => 'string', 'prenom' => 'string', 'age' => 'int', 'profession' => 'string', 'rue' => 'string', 'codePostal' => 'string', 'ville' => 'string', 'pays' => 'string', 'telephone' => 'string', 'email' => 'string', 'idmotivation' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
