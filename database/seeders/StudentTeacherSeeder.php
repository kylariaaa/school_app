<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Teacher;

class StudentTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua ID siswa dan guru yang sudah ada di database
        $studentIds = Student::pluck('id')->all();
        $teacherIds = Teacher::pluck('id')->all();

        // Pastikan ada data siswa dan guru sebelum melanjutkan
        if (empty($studentIds) || empty($teacherIds)) {
            $this->command->warn("⚠️ Pastikan sudah menjalankan StudentSeeder dan TeacherSeeder terlebih dahulu.");
            return;
        }

        // Loop untuk setiap siswa dan hubungkan dengan beberapa guru secara acak
        foreach ($studentIds as $studentId) {
            // Pilih 1 hingga 3 guru secara acak untuk setiap siswa
            $randomTeachers = (array) array_rand($teacherIds, rand(1, min(3, count($teacherIds))));

            foreach ($randomTeachers as $teacherKey) {
                DB::table('student_teacher')->insert([
                    'student_id' => $studentId,
                    'teacher_id' => $teacherIds[$teacherKey],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
