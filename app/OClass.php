<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'o_class';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'o_class_id';

    protected $fillable = [
        'name', 'academic_session_id',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * academic_session table.
     *
     */
    public function academicSession()
    {
        return $this->belongsTo('App\AcademicSession', 'academic_session_id', 'academic_session_id');
    }

    /*
     * section table.
     *
     */
    public function sections()
    {
        return $this->hasMany('App\Section', 'o_class_id', 'o_class_id');
    }

    /*
     * fees_invoice table.
     *
     */
    public function feesInvoices()
    {
        return $this->hasMany('App\FeesInvoice', 'o_class_id', 'o_class_id');
    }



    public function getTotalStudents()
    {
        $total = 0;

        foreach ($this->sections as $section) {
            $total += count($section->students);
        }

        return $total;
    }
}
