<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Facades\Cache;

class ArticleObserver
{
    /**
     * Clear cache for paginated articles when an article is created.
     */
    public function created(Article $article): void
    {
        $this->clearPaginatedArticlesCache();
    }

    /**
     * Clear cache for paginated articles when an article is updated.
     */
    public function updated(Article $article): void
    {
        $this->clearPaginatedArticlesCache();
    }

    /**
     * Clear cache for paginated articles when an article is deleted.
     */
    public function deleted(Article $article): void
    {
        $this->clearPaginatedArticlesCache();
    }

    /**
     * Clear cache for all pages of paginated articles.
     */
    protected function clearPaginatedArticlesCache(): void
    {
        $page = 1;
        do {
            Cache::forget('articles-page' . $page);
            $page++;
        } while (Cache::has('articles-page' . $page));
    }


}
