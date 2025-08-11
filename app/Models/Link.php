<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    public function User()
    {
        return $this->belongsTo(User::class);
    }


    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(+1);
    }

    private function move($to)
    {
        $index = $this->index;
        $newIndex = $this->index + $to;


        $this->user->links()->where('index', '=', $newIndex)->update([
            'index' => $index
        ]);

        $this->index = $newIndex;
        $this->save();
    }
}
