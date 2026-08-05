<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=4;$i++) {
            News::query()->create([
                'image' => 'news'.$i.'.jpg',
                'title' => 'Новость '.$i,
                'description' => 'Nam consectetur ullamcorper quam, quis porttitor quam posuere at. Curabitur.',
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed metus magna. Sed gravida et felis finibus fermentum. Maecenas ullamcorper molestie mollis. Quisque quam erat, vestibulum mattis nisi ac, iaculis mattis libero. Phasellus dictum aliquet diam sit amet porta. Vestibulum efficitur fermentum tristique. Nulla mattis ultricies nulla eget faucibus.</p><p>Curabitur nec diam nec mi ullamcorper auctor. Ut ut leo hendrerit, tempus lacus placerat, pretium neque. Phasellus rutrum sodales purus at consequat. Nullam dapibus nisl a venenatis consectetur. In id venenatis justo. Quisque justo turpis, fringilla nec risus quis, tempus consectetur ligula. Proin a sodales sapien.</p><p>Vivamus in orci ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod consectetur bibendum. Nunc euismod lacus ornare, laoreet sem sit amet, dictum purus. In eu fermentum sapien, sit amet posuere odio. Quisque efficitur, felis et efficitur dignissim, sapien ex tincidunt ante, id pulvinar mauris neque non magna. Phasellus aliquet vehicula nisi, vel ultrices tellus dictum tristique. Vestibulum eget eros vel libero lobortis semper.</p><p>Nullam scelerisque justo id quam pellentesque luctus. In auctor tempor ligula, vitae volutpat nulla scelerisque non. Donec lacinia quam at varius fringilla. Mauris id odio ac quam dapibus scelerisque non eget purus. Mauris facilisis nunc ut ligula cursus convallis. Suspendisse gravida lacinia ipsum. Sed vel pharetra urna, ut hendrerit mi.</p>',
                'active' => 1
            ]);
        }
    }
}
