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

* [PHPUnit](https://phpunit.de/manual/5.7/en/index.html)
    * [Writing Tests for PHPUnit](https://phpunit.de/manual/5.7/en/writing-tests-for-phpunit.html)
    * [Assertions](https://phpunit.de/manual/5.7/en/appendixes.assertions.html)
* [Brain Monkey](https://brain-wp.github.io/BrainMonkey/)
    * [Patching with `when()`](https://brain-wp.github.io/BrainMonkey/docs/functions-when.html)
    * [Testing with `expect()`](https://brain-wp.github.io/BrainMonkey/docs/functions-expect.html)
    * [Testing Added Hooks](https://brain-wp.github.io/BrainMonkey/docs/wordpress-hooks-added.html)
    * [Testing Fired Hooks](https://brain-wp.github.io/BrainMonkey/docs/wordpress-hooks-done.html)
* [Mockery](http://docs.mockery.io/en/latest/)
    * [Creating Test Doubles](http://docs.mockery.io/en/latest/reference/creating_test_doubles.html)
    * [Expectation Declarations](http://docs.mockery.io/en/latest/reference/expectations.html)
    * [Validating Types and Resources](http://docs.mockery.io/en/latest/reference/argument_validation.html#validating-types-and-resources)


## Have Fun!

Thorsten
