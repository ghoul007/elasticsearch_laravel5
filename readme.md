<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

##   Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

# Elasticsearch

  A Distributed RESTful Search Engine

  "https://www.elastic.co/products/elasticsearch":https://www.elastic.co/products/elasticsearch

Elasticsearch is a distributed RESTful search engine built for the cloud. Features include:

* Distributed and Highly Available Search Engine.
** Each index is fully sharded with a configurable number of shards.
** Each shard can have one or more replicas.
** Read / Search operations performed on any of the replica shards.
* Multi Tenant.
** Support for more than one index.
** Index level configuration (number of shards, index storage, ...).
* Various set of APIs
** HTTP RESTful API
** Native Java API.
** All APIs perform automatic node operation rerouting.
* Document oriented
** No need for upfront schema definition.
** Schema can be defined for customization of the indexing process.
* Reliable, Asynchronous Write Behind for long term persistency.
* (Near) Real Time Search.
* Built on top of Lucene
** Each shard is a fully functional Lucene index
** All the power of Lucene easily exposed through simple configuration / plugins.
* Per operation consistency
** Single document level operations are atomic, consistent, isolated and durable.
* Open Source under the Apache License, version 2 ("ALv2")