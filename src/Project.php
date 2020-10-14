<?php

namespace Archetype;

use Archetype\Schema\SimpleSchema\SimpleSchema;

class Project
{
    public $path;

    public $schema;

    public $generators = [
        Generators\User::class,
        Generators\Model::class,        
        Generators\Migration::class,
    ];

    public function current()
    {
        $this->path = base_path();

        return $this;
    }    

    public function gitInit()
    {
        return $this;
    }    

    public function gitCommit()
    {
        return $this;
    }

    public function useSqlite()
    {
        return $this;
    }

    public function composerInstall()
    {
        return $this;
    }

    public function yarn()
    {
        return $this;
    }
    
    public function migrate()
    {
        return $this;
    }
    
    public function extend()
    {
        return $this;
    }
    
    public function schema(string $schema = '')
    {
        if(!$schema) return $this->schema;

        $this->schema = SimpleSchema::parse($schema)->get();

        return $this;
    }
    
    public function build()
    {
        collect($this->generators)->each(function($generator) {
            $generator::make($this->schema)->build();
        });

        return $this;
    }
    
    public function test()
    {
        return $this;
    }  
}