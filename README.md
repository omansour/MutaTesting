# MutaTesting

Mutation testing tool for PHP.

According to [Wikipedia](http://en.wikipedia.org/wiki/Mutation_testing):

> Mutation testing (or Mutation analysis or Program mutation) evaluates the 
  quality of software tests. Mutation testing involves modifying a program's 
  source code or byte code in small ways.


## Installation

Edit your `composer.json`:

```json
"require": {
    "halleck45/mutaTesing" : "master"
}
```

And run Composer:

    php composer.phar update halleck45/mutaTesing

```
## Usage

```bash
./bin/mutatesting {tool} {binary}  {test directory}
```

Example:

```bash
./bin/mutatesting phpunit phpunit.phar myTestFolder
```

### Advanced usage

If your tests need options, you can pass them with `--options`

```bash
./bin/mutatesting phpunit phpunit.phar  myTestFolder --options="-c phpunit.xml"
```

You can change the number of parallelized tests with the `processes` options :
```bash
./bin/mutatesting phpunit phpunit.phar  myTestFolder --processes=10
```


## Copyright

Copyright (c) 2013 Jean-François Lépine. See LICENSE for details.
