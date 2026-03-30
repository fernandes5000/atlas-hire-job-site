<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocalizedPagesTest extends TestCase
{
    use RefreshDatabase;

    protected bool $seed = true;

    public function test_root_redirects_to_the_preferred_locale(): void
    {
        $response = $this
            ->withHeaders(['Accept-Language' => 'pt-BR,pt;q=0.9,en-US;q=0.8'])
            ->get('/');

        $response->assertRedirect('/pt-BR');
    }

    public function test_homepage_renders_in_every_supported_locale(): void
    {
        $expectations = [
            'en-US' => 'Find the role that moves your career forward.',
            'pt-BR' => 'Encontre a vaga que leva sua carreira adiante.',
            'es' => 'Encuentra el rol que impulsa tu próxima etapa.',
        ];

        foreach ($expectations as $locale => $heading) {
            $response = $this->get('/'.$locale);

            $response
                ->assertOk()
                ->assertSee($heading);
        }
    }

    public function test_vacancy_detail_page_is_localized(): void
    {
        $response = $this->get('/es/vacancies/senior-product-designer');

        $response
            ->assertOk()
            ->assertSee('Diseñadora/o de Producto Senior')
            ->assertSee('Lo que harás')
            ->assertSee('Northgrid');
    }
}
