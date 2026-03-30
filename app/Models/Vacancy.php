<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Vacancy extends Model
{
    /** @use HasFactory<\Database\Factories\VacancyFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'slug',
        'company_name',
        'team',
        'employment_type',
        'work_model',
        'experience_level',
        'title',
        'excerpt',
        'description',
        'location',
        'highlights',
        'responsibilities',
        'requirements',
        'benefits',
        'currency',
        'salary_min',
        'salary_max',
        'salary_period',
        'application_url',
        'is_featured',
        'is_published',
        'posted_at',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'title' => 'array',
            'excerpt' => 'array',
            'description' => 'array',
            'location' => 'array',
            'highlights' => 'array',
            'responsibilities' => 'array',
            'requirements' => 'array',
            'benefits' => 'array',
            'salary_min' => 'integer',
            'salary_max' => 'integer',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'posted_at' => 'immutable_datetime',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublished(Builder $query): void
    {
        $query
            ->where('is_published', true)
            ->orderByDesc('is_featured')
            ->orderByDesc('posted_at');
    }

    public function translate(string $attribute, ?string $locale = null): mixed
    {
        $translations = $this->getAttributeValue($attribute);

        if (! is_array($translations)) {
            return $translations;
        }

        $resolvedLocale = $locale ?? app()->getLocale();
        $fallbackLocale = config('app.fallback_locale');

        return $translations[$resolvedLocale]
            ?? $translations[$fallbackLocale]
            ?? collect($translations)->first();
    }

    /**
     * @return array<int, string>
     */
    public function translatedList(string $attribute, ?string $locale = null): array
    {
        $translated = $this->translate($attribute, $locale);

        return is_array($translated) ? $translated : [];
    }

    public function salaryLabel(?string $locale = null): string
    {
        if (! $this->salary_min || ! $this->salary_max || ! $this->currency) {
            return __('site.salary.not_listed', locale: $locale);
        }

        $resolvedLocale = $locale ?? app()->getLocale();

        return __('site.salary.'.$this->salary_period, [
            'min' => Number::currency($this->salary_min, in: $this->currency, locale: $resolvedLocale),
            'max' => Number::currency($this->salary_max, in: $this->currency, locale: $resolvedLocale),
        ], $resolvedLocale);
    }
}
