<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class offeringSeeder extends Seeder
{
      public function run(): void {
       DB::table('offerings')->insert ([
            [  
       
        'offering_name' => 'Anxiety',
        'description' => 'Cognitive Behavioral Therapy',
        'schedule' => 'sunday',
        'duration' => '2 hours',
         ],

         
         [  
            
            'offering_name' => 'Depression',
            'description' => 'Family Therapy',
            'schedule' => 'tuesday',
            'duration' => '3 hours',
             ],

             [  
                
                'offering_name' => 'Grief',
                'description' => 'Grief Counseling',
                'schedule' => 'monday',
                'duration' => '1 hour',
                 ],

                 
             [  
                
                'offering_name' => 'Addiction',
                'description' => ' Addiction Counseling',
                'schedule' => 'tuesday',
                'duration' => '2 hours',
                 ],

                 [  
                
                    'offering_name' => ' Relationship Issues',
                    'description' => ' Communication problems',
                    'schedule' => 'wednesday',
                    'duration' => '1 hour',
                     ],

                     
                 [  
                
                    'offering_name' => ' Trauma',
                    'description' => ' Trauma Counseling',
                    'schedule' => 'saturday',
                    'duration' => '1 hour',
                     ],

                     [  
                
                        'offering_name' => ' Stress Management',
                        'description' => ' Developing coping strategies',
                        'schedule' => 'tuesday',
                        'duration' => '5 hours',
                         ],

                       [
                         'offering_name' => ' Self-Esteem',
                        'description' => ' subjective emotional evaluation',
                        'schedule' => 'tuesday',
                        'duration' => '1 hour',
                         ],

                         [
                            'offering_name' => ' Anger Management',
                           'description' => ' coping mechanisms for anger',
                           'schedule' => 'thursday',
                           'duration' => '2 hours',
                            ],

                            [
                                'offering_name' => ' Family Conflict',
                               'description' => ' family conflict resolution',
                               'schedule' => 'thursday',
                               'duration' => '2 hours',
                                ],
   



    

                     
        ]);
    }
}