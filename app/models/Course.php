<?php
use LaravelBook\Ardent\Ardent;

class Course extends Ardent {
   protected $fillable = array('name', 'credit_hours', 'general_information', 'specific_information', 'accrediting_information');
    
   /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
   protected $table =  "courses";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'name'                    => 'required',
      'credit_hours'  => 'required|numeric|between:1,5',
      'general_information'     => 'required',
      'specific_information'    => 'required',
      'accrediting_information' => 'required',
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function outlines(){
      return $this->hasMany('Outline');
   }

   public function teachers(){
      return $this->belongsToMany('teacher');
   }
}