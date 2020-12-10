# PHP Unit Testing with Brain Monkey


## Requirements

In order to run the tests, you need to have installed the following:

* PHP 5.6 or higher (available via command line)
* [Composer](https://getcomposer.org/)


## Installation

To install and set up your environment, run `composer install`.

You can test if everything is working by attempting to run one of the exercises as described in the next section.


## Running the Tests

Each exercise has its own test suite/file.
To run a specific exercise, perform the according command from the root directory of the repository, as explained below.

For each PHP exercise, there is a dedicated _test suite_, named `exercise1` etc.
The generic command to run a specific test suite is as follows:

```console
./vendor/bin/phpunit --testsuite exerciseX
```

Replace the "X" in `exerciseX` with the exercise number.
So, for example, running the test suite for exercise 1 would be this:

```console
./vendor/bin/phpunit --testsuite exercise1
```


## Documentation

In case you might want to refer to the official documentation of the tools you are using:

* [PHPUnit](https://phpunit.readthedocs.io/en/7.5/)
    * [Writing Tests for PHPUnit](https://phpunit.readthedocs.io/en/7.5/writing-tests-for-phpunit.html)
    * [Assertions](https://phpunit.readthedocs.io/en/7.5/assertions.html)
* [Brain Monkey](https://giuseppe-mazzapica.gitbook.io/brain-monkey/)
    * [Patching functions with `when()`](https://giuseppe-mazzapica.gitbook.io/brain-monkey/functions-testing-tools/functions-when)
    * [Testing functions with `expect()`](https://giuseppe-mazzapica.gitbook.io/brain-monkey/functions-testing-tools/functions-expect)
    * [Test added hooks](https://giuseppe-mazzapica.gitbook.io/brain-monkey/wordpress-specific-tools/wordpress-hooks-added)
    * [Test done hooks](https://giuseppe-mazzapica.gitbook.io/brain-monkey/wordpress-specific-tools/wordpress-hooks-done)
* [Mockery](http://docs.mockery.io/en/latest/)
    * [Creating Test Doubles](http://docs.mockery.io/en/latest/reference/creating_test_doubles.html)
    * [Expectation Declarations](http://docs.mockery.io/en/latest/reference/expectations.html)
    * [Validating Types and Resources](http://docs.mockery.io/en/latest/reference/argument_validation.html#validating-types-and-resources)


## Have Fun!

Thorsten
