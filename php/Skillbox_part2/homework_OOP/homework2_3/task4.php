<?php

interface Reader
{
    public function read();
    //public function read(): array;
}

interface Writer
{
    public function write(array $data);
}

interface Converter
{
    public function convert($item);
}

class ArrayReader implements Reader
{
    private $source = ['1 ', '2. ', 3];

    public function read()
    {
        return $this->source;
    }
}

class ArrayWriter implements Writer
{
    private $data = [];

    public function write(array $data)
    {
        $this->data = $data;
    }
}

class SpaceConverter implements Converter
{
    public function convert($item)
    {
        return str_replace(" ", "", $item); //удаляет пробелы
    }
}

class DotConverter implements Converter
{
    public function convert($item)
    {
        return str_replace(".", " ", $item); //меняет точки на пробелы
    }
}

class Import
{
    private $reader;
    private $writer;
    private $converters = [];

    public function from(Reader $reader)
    {
        $this->reader = $reader;
        return $this;
    }

    public function to(Writer $writer)
    {
        $this->writer = $writer;
        return $this;
    }

    public function with(Converter $converter)
    {
        $this->converters[] = $converter;
        return $this;
    }

    public function execute()
    {
        $data = $this->reader->read();
        foreach ($this->converters as $converter) {
            foreach ($data as &$value) {
                $value = $converter->convert($value);
            }
        }
        $this->writer->write($data);
    }
}

$import = new Import;
$import->from(new ArrayReader);
$import->to(new ArrayWriter);
$import->with(new SpaceConverter);
$import->with(new DotConverter);
$import->execute();