<?php

namespace PHPFileManipulator\Tests\Unit;

use PHPFileManipulator\Tests\FileTestCase;
use PHPFile;
use LaravelFile;
use PHPFileManipulator\Endpoints\PHP\FileQueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class LaravelQueryBuilderTest extends FileTestCase
{    
    /** @test */
    public function it_can_scope_on_models()
    {        
        $this->assertCount(
            1, LaravelFile::models()->get()
        );
    }
    
    /** @test */
    public function it_can_scope_on_controllers()
    {        
        $this->assertCount(
            7, LaravelFile::controllers()->get()
        );
    }    
}