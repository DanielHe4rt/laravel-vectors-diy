# Vectors Speecoding

Scaffold for the vectors speecoding project built with Laravel Frawework and OpenAI.

## Goal

Build a simple application to find livecoders based on a text search using Vector Embeddings.

![Application Preview](/.github/images/search-banner.png)

## Requirements

List of technologies used in this project:

* PHP 8.2^
* Laravel 11.x

Also, you will need an account at [Qdrant Cloud](https://cloud.qdrant.io) and a OpenAI API Key since we'll use the [text-embedding-ada-002](https://platform.openai.com/docs/guides/embeddings/what-are-embeddings) for this example.   

> [TIP]
> You can replace OpenAI for any other Vector Embedding of your choice. Feel free to make it useful for you as well! 

### Packages Used

* [Qdrant-php](https://github.com/hkulekci/qdrant-php) - PHP Client for Qdrant Vector Database
* [OpenAI Laravel](https://github.com/openai-php/laravel) - Laravel Integration for OpenAI Client

## Build by yourself

Here's a quick to-do list on how you can build the whole project

* Create a Laravel Command `php artisan make:command SetupVectorDatabaseCommand`
  * Inside this command you should use the `Qdrant Client` to :
    * Create a Collection called `twitch-streamers`;
    * Create a Vector called `streamers` with a size `1536` (ada-002 embedding size)
* Create a Laravel Command `php artisan make:command StreamersImportCommand`
  * Inside this command, retrieve the data from `streamers.json` and load it to your `Qdrant` Collection
* Using a Laravel Livewire Component which is already provided on the app, you should:
  * Embed your text input value using OpenAI `text-embedding-ada-002` 
  * Search in Qdrant the closest results and display it into the view. 
