<?php

namespace App\Livewire\HomeComponents;

use Livewire\Component;

class Review extends Component
{


    public function render()
    {
        $reviews = [
            [
                'name' => 'Courtney Henry',
                'company' => 'microsoft corp',
                'avatar' => 'images/users/user-5.png',
                'review' => 'Our platform helps build secure onboarding authentic experiences & engage your users. We build.',
                'rating' => 4
            ],
            [
                'name' => 'Ronald Richards',
                'company' => 'meta limited',
                'avatar' => 'images/users/user-2.png',
                'review' => 'Our platform helps build secure onboarding authentic experiences & engage your users. We build.',
                'rating' => 4
            ],
            [
                'name' => 'Bessie Cooper',
                'company' => 'apple inc ltd',
                'avatar' => 'images/users/user-6.png',
                'review' => 'Our platform helps build secure onboarding authentic experiences & engage your users. We build.',
                'rating' => 4
            ]
        ];
        return view('livewire.home-components.review', compact('reviews'));
    }
}
