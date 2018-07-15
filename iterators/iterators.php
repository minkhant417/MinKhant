<?php
class BasicIterator extends IteratorIterator{
    public function __construct($pathToFile)
    {
        parent::__construct(new SplFileObject($pathToFile,'r'));
        $file=$this->getInnerIterator();
        $file->setFlags(SplFileObject::READ_CSV);
        $file->setCsvControl(',','"',"\\");
    }
}
$filePath='./data.csv';
$iterator = new BasicIterator($filePath);
foreach ($iterator as $i=>$row){
    var_dump($row);
}