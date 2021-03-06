<?php

namespace spec\App\Entity;

use App\Entity\Dinosaur;
use PhpSpec\Exception\Example\FailureException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DinosaurSpec extends ObjectBehavior
{
    public function getMatchers(): array
    {
        return [
          'returnZero' => function($subject){
            if ( $subject !== 0) {
                throw new FailureException(sprintf("Return value should be zero, found %s",$subject));
            }
            return true;
          }
        ];
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Dinosaur::class);
    }

    function it_should_default_to_zero_length_using_custom_matcher()
    {
        $this->getLength()->shouldReturnZero();
    }

    function it_should_set_the_length()
    {
        $this->setLength(9);

        $this->getLength()->shouldReturn(9);
    }
}
