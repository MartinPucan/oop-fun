<?php
declare(strict_types=1);

class Girl
{
	public const SMALL = 1;
	public const MEDIUM = 2;
	public const BIG = 3;

	/** @var bool */
	private $isMoody;

	/** @var int */
	private $boobs;

	/** @var string */
	private $ass;

	/** @var bool */
	private $hasPeriod;

	/** @var Guy */
	private $boyfriend;

	/** @var bool */
	private $isGoldDigger;

	public function getBoobs(): int
	{
		return $this->boobs;
	}

	public function setBoobs(int $boobs): void
	{
		$this->boobs = $boobs;
	}

	public function getAss(): string
	{
		return $this->ass;
	}

	public function setAss(int $ass): void
	{
		$this->ass = $ass;
	}

	public function isMoody(): bool
	{
		return $this->isMoody;
	}

	public function setIsMoody(bool $isMoody): void
	{
		$this->isMoody = $isMoody;
	}

	public function isHasPeriod(): bool
	{
		return $this->hasPeriod;
	}

	public function setHasPeriod(bool $hasPeriod): void
	{
		$this->hasPeriod = $hasPeriod;
	}

	public function getBoyfriend(): ?Guy
	{
		return $this->boyfriend;
	}

	public function setBoyfriend(Guy $boyfriend): void
	{
		$this->boyfriend = $boyfriend;
	}

	public function isGoldDigger(): bool
	{
		return $this->isGoldDigger;
	}

	public function setIsGoldDigger(bool $isGoldDigger): void
	{
		$this->isGoldDigger = $isGoldDigger;
	}

	public function showTits(): void
	{
		echo "Here you go\n";
	}

	public function slapGuy(string $comment = ''): void {
		echo "You obscene piece of shit! Fuck you! {$comment}\n";
	}
}


class Guy
{
	/** @var Girl */
    private $girlfriend;

    /** @var Girl */
    private $otherGirl;

    public function askGirlToShowTits(?Girl $girl = null): void
	{
		$possibleGirlfriend = $this->girlfriend;

		if ($girl === null) {
			$girl = $possibleGirlfriend;
		}

		if ($girl === null) {
			echo "You haven't passed any girl";
			return;
		}

		if (
			$girl->getBoyfriend() !== $this
			&& $possibleGirlfriend !== null
			&& $possibleGirlfriend->getBoyfriend() === $this
		) {
			$possibleGirlfriend->slapGuy("How you can do something like this to your girlfriend?\n");
		}

		if ($girl->getBoobs() >= Girl::MEDIUM) {
			echo "Ok, I want you!\n";
		} else {
			echo "Ehhh, nice tits I guess.\n";
		}

		if ($girl->getBoyfriend() === $this || $girl->isGoldDigger()) {
			$girl->showTits();
		} else {
			$girl->slapGuy();
		}
	}

	public function getGirlfriend(): Girl
	{
		return $this->girlfriend;
	}

	public function setGirlfriend(Girl $girlfriend): void
	{
		$this->girlfriend = $girlfriend; 
	}
}


$guy = new Guy;
$girl = new Girl;
$girl2 = new Girl;

$girl->setIsGoldDigger(false);
$girl->setBoobs(Girl::SMALL);

$girl2->setIsGoldDigger(true);
$girl2->setBoobs(Girl::BIG);

$guy->setGirlfriend($girl);

$girl->setBoyfriend($guy);

$guy->askGirlToShowTits($girl2);
