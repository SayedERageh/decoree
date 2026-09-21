<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use App\Models\Project;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [];

        /*
        |--------------------------------------------------------------------------
        | Static Pages
        |--------------------------------------------------------------------------
        */

        $staticPages = [
            [
                'url' => url('/'),
                'changefreq' => 'weekly',
                'priority' => '1.0',
            ],
            [
                'url' => url('/about'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'url' => url('/services'),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'url' => url('/projects'),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'url' => url('/products'),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'url' => url('/contact'),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ],
        ];

        foreach ($staticPages as $page) {
            $urls[] = [
                'loc' => $page['url'],
                'lastmod' => now()->toAtomString(),
                'changefreq' => $page['changefreq'],
                'priority' => $page['priority'],
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | Products
        |--------------------------------------------------------------------------
        */

        if (class_exists(Product::class)) {
            $products = Product::query()
                ->where('is_active', true)
                ->get();

            foreach ($products as $product) {
                $urls[] = [
                    'loc' => url('/products/' . $product->slug),
                    'lastmod' => optional($product->updated_at)->toAtomString()
                        ?? now()->toAtomString(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ];
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Services
        |--------------------------------------------------------------------------
        */

        if (class_exists(Service::class)) {
            $services = Service::query()
                ->where('is_active', true)
                ->get();

            foreach ($services as $service) {
                $urls[] = [
                    'loc' => url('/services/' . $service->slug),
                    'lastmod' => optional($service->updated_at)->toAtomString()
                        ?? now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8',
                ];
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Projects
        |--------------------------------------------------------------------------
        */

        if (class_exists(Project::class)) {
            $projects = Project::query()
                ->where('is_active', true)
                ->get();

            foreach ($projects as $project) {
                $urls[] = [
                    'loc' => url('/projects/' . $project->slug),
                    'lastmod' => optional($project->updated_at)->toAtomString()
                        ?? now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8',
                ];
            }
        }

        return response()
            ->view('sitemap', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}