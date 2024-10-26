<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';
    protected $fillable = [
        "nameFirst",
        "nameLast",
        "contact",
        "email",
        "address",
        "position",
        "positionDescription",
        "experienceCompanyName",
        "experienceCompanyAddress",
        "experienceCompanyDuration",
        "experienceCompanyPosition",
        "experienceCompanyPositionDescription",
        "educationSchoolName",
        "educationSchoolAddress",
        "educationSchoolDuration",
        "educationSchoolCourse",
        "projectName",
        "educationPosition",
        "interest",
    ];
}
