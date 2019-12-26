<?php

class Operation
{
    protected $a = 0;
    protected $b = 0;

    public function setA($num)
    {
        $this->a =$num;
    }

    public function setB($num)
    {
        $this->b =$num;
    }

    public function getResult()
    {
        return 0;
    }
}

/**
 * Add 
 */
class OperationAdd extends Operation
{
    public function getResult()
    {
        return $this->a + $this->b;
    }
}

/**
 * Mul
 */
class OperationMul extends Operation
{
    public function getResult()
    {
        return $this->a * $this->b;
    } 
}

/**
 * Sub
 */
class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->a - $this->b;
    }
}

/**
 * Div
 */
class OperationDiv extends Operation
{
    public function getResult()
    {
        return $this->a / $this->b;
    }
}

class OperationFactory
{
    public static function createOperation($operation)
    {
        switch($operation)
        {
            case '+':
            $oper = new OperationAdd();
            break;
            case '-':
            $oper = new OperationSub();
            break;
            case '/':
            $oper = new OperationDiv();
            break;
            case '*':
            $oper = new OperationMul();
            break;
        }
        return $oper;
    }
}

// Test
$operation = OperationFactory::createOperation('+');
$operation->setA(1);
$operation->setB(2);
echo $operation->getResult() . PHP_EOL;