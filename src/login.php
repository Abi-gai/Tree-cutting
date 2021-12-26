<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
//Email test Case
final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('abi@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'abi@example.com',
            Email::fromString('abi@example.com')
        );
    }
}

//Password test Case
final class PasswordTest extends TestCase

{
    public function testCanBeCreatedFromPassword(): void
    {
        $this->assertInstanceOf(
            Password::class,
            Password::fromString(preg_match('/^[a-zA-Z\s]+$/'))
        );
    }

    public function testCannotBeCreatedFromInvalidPassword(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Password::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'ThisPassword',
            Email::fromString('ThisPassword')
        );
    }
}
?>