<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

class  CovidStatistic extends Authenticatable
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'date',
        'case_amount',
    ];

   public function user()
   {
      return $this->belongsTo(User::class, 'foreign_user_ID');
   }


}
