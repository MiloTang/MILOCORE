<?php
namespace Home\Controller;
use Admin\Controller\LoginController;
use Core\libs\BaseController;
class DataStructureController extends BaseController implements \Countable
{
    public function index()
    {
        $this->SplDoublyLinkedList();
        $this->SplStack();
        $this->SplQueue();
        $this->viewArray($this->generateArray());
        $this->viewMoreArray($this->generateArray(),$this->generateArray(),$this->generateArray(),'22');
        $this->viewMultiArray();
        $this->fileIteratorDir(getcwd());
        $this->countNum($this->generateArray());
        $this->dirList(getcwd());
        $this->fileIteratorPrint(getcwd());
        $this->spl();
    }
    private function SplDoublyLinkedList()
    {
        $spl=new \SplDoublyLinkedList();
        $spl->push('11');
        $spl->push('12');
        $spl->push('13');
        $spl->push('14');
        $spl->unshift('15');
        $spl->unshift('16');
        PrintFm($spl);
        $spl->rewind();
        $this->viewSpl($spl);
        $spl->next();
        $this->viewSpl($spl);
        $spl->prev();
        $this->viewSpl($spl);
        $spl->prev();
        $this->viewSpl($spl);
        $spl->pop();
        PrintFm($spl);

    }
    private function SplStack()
    {
        $stack=new \SplStack();
        $stack->push('a');
        $stack->push('b');
        $stack->push('c');
        $stack->push('d');
        $stack->push('e');
        $stack->push('f');
        $this->viewAllSpl($stack);
        $stack->pop();
        $this->viewAllSpl($stack);
        $stack->rewind();
        $this->viewSpl($stack);

    }
    private function SplQueue()
    {
        $queue=new \SplQueue();
        $queue->enqueue('1');
        $queue->enqueue('2');
        $queue->enqueue('3');
        $queue->enqueue('4');
        $this->viewAllSpl($queue);
        $queue->dequeue();
        $this->viewAllSpl($queue);
    }
    public function spl()
    {
        $login=new LoginController();
        $login->sayHi();
        echo '<br>'.'耗时:'.(microtime(true)-$GLOBALS['StartTime']);
    }
    private function viewSpl(\SplDoublyLinkedList $spl)
    {
        echo '<hr>';
        if ($spl->valid())
        {
            echo 'SPL key is: '.$spl->key();
            echo '<br>';
            echo 'SPL value is: '.$spl->current();
            echo '<br>';
        }
        else
        {
            echo 'invalid SPL current';
        }
    }
    private function viewAllSpl(\SplDoublyLinkedList $spl)
    {
        echo '<hr>';
        $spl->rewind();
        while ($spl->valid())
        {
            echo 'SPL key is: '.$spl->key();
            echo '<br>';
            echo 'SPL value is: '.$spl->current();
            echo '<br>';
            $spl->next();
        }
        echo '<hr>';
    }
    private function generateArray():array
    {
        $array=array();
        $num=rand(1,20);
        for ($i=0;$i<$num;$i++)
        {
            $array[rand(1,99999)]=rand(1,99999);
        }
        return $array;
    }
    private function viewArray(array $array)
    {
        echo '1 Iterator'.'<br>';
        foreach ($array as $item=>$value)
        {
            echo $item.'  =>  '.$value.'<br>';
        }
        echo '<br>'.'2 Iterator'.'<br>';
        $obj=new \ArrayObject($array);
        $it=$obj->getIterator();
        foreach ($it as $key=>$value )
        {
            echo $key.' => '.$value.'<br>';
        }
        echo '<br>'.'3 Iterator'.'<br>';
        $it->rewind();
        while ($it->valid())
        {
            echo $it->key().' => '.$it->current().'<br>';
            $it->next();
        }
        echo '<br>'.'sort key'.'<br>';
        $it->ksort();
        foreach ($it as $key=>$value )
        {
            echo $key.' => '.$value.'<br>';
        }
        echo '<br>'.'sort value'.'<br>';
        $it->asort();
        foreach ($it as $key=>$value )
        {
            echo $key.' => '.$value.'<br>';
        }
    }
    private function viewMoreArray()
    {
        PrintFm(func_get_args());
        $it=new \AppendIterator();
        for ($i=func_num_args()-1;$i>=0;$i--)
        {
            if (is_array(func_get_args()[$i]))
            {
                $it->append(new \ArrayIterator(func_get_args()[$i]));
            }
        }
        foreach ($it as $key=>$value )
        {
            echo $key.' => '.$value.'<br>';
        }
    }
    private function viewMultiArray()
    {
        echo '<hr>';
        $idIterator=new \ArrayIterator(array('20160001','20160002','20160003','20160004'));
        $nameIterator=new \ArrayIterator(array('张三','李四','王二','麻子'));
        $ageIterator=new \ArrayIterator(array('18','22','19','23'));
        $mIt=new \MultipleIterator(\MultipleIterator::MIT_KEYS_ASSOC);
        $mIt->attachIterator($idIterator,'ID');
        $mIt->attachIterator($nameIterator,'NAME');
        $mIt->attachIterator($ageIterator,'AGE');
        foreach ($mIt as $key=>$value)
        {
          PrintFm($value);
        }
    }
    private function fileIteratorPrint($dir)
    {
        $it=new \FilesystemIterator($dir);
        foreach ($it as $fInfo)
        {
            printf("%s\t\t%s\t\t%8s\t\t%s",date('Y-m-d H:i:s',$fInfo->getMTime()),$fInfo->isDir()?'DIR':'',$fInfo->getSize(),$fInfo->getFileName());
            echo '<br>';
        }
    }
    private function fileIteratorDir(string $dir)
    {
        $it=new \FilesystemIterator($dir);
        $it->rewind();
        while ($it->valid())
        {
            if ($it->isDir())
            {
                $isDir=$it->getFilename();
                if (substr($isDir,0,1)!='.')
                {
                    if(!is_file($dir.'/'.$isDir.'/index.html'))
                    {
                        file_put_contents($dir.'/'.$isDir.'/index.html','');
                        echo 'here';
                    }
                    $this->fileIteratorDir($dir.'/'.$it->getFilename());
                }
            }
            $it->next();
        }
    }
    private function countNum(array $array)
    {
        echo '<hr>';
        echo count($array);
        echo '<hr>';
        $obj=new DataStructureController();
        echo count($obj);
    }
    public function count()
    {
        return 100;
    }
    private function dirList(string $dir)
    {
        $it=new  \RecursiveDirectoryIterator($dir);
        $it->rewind();
        while ($it->valid())
        {

            if ($it->hasChildren()&&substr($it->getFilename(),0,1)!='.')
            {
                PrintFm($it->getChildren());
            }
            $it->next();
        }
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'diu';
    }
}
