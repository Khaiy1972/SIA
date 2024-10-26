<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string("nameFirst");
            $table->string("nameLast");
            $table->string("contact");
            $table->string("email");
            $table->string("address");
            $table->string("position");
            $table->longText("positionDescription");
            $table->string("experienceCompanyName");
            $table->string("experienceCompanyAddress");
            $table->string("experienceCompanyDuration");
            $table->string("experienceCompanyPosition");
            $table->longText("experienceCompanyPositionDescription");
            $table->string("educationSchoolName");
            $table->string("educationSchoolAddress");
            $table->string("educationSchoolDuration");
            $table->string("educationSchoolCourse");
            $table->string("projectName");
            $table->string("educationPosition");
            $table->longText("interest");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
