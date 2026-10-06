<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocaleSwitchTest extends TestCase
{
    public function test_visitors_can_switch_to_english_and_keep_the_choice(): void
    {
        $response = $this->from(route('home'))->get(route('locale.switch', 'en'));

        $response
            ->assertRedirect(route('home'))
            ->assertSessionHas('locale', 'en');

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Michigan Boarding Arts School')
            ->assertSee('About');
    }

    public function test_visitors_can_switch_back_to_indonesian(): void
    {
        $this->withSession(['locale' => 'en']);

        $this->from(route('home'))
            ->get(route('locale.switch', 'id'))
            ->assertRedirect(route('home'))
            ->assertSessionHas('locale', 'id');

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Sekolah Asrama Seni Michigan')
            ->assertSee('Tentang');
    }

    public function test_unsupported_languages_are_not_accepted(): void
    {
        $this->get(route('locale.switch', 'fr'))
            ->assertNotFound();
    }
}
