<?php

namespace Zoe;

use Zoe\Entities\Account;
use Zoe\Entities\Brokerage;
use Zoe\Entities\Challenges;
use Zoe\Entities\History;
use Zoe\Entities\Iframe;
use Zoe\Entities\Portfolio;
use Zoe\Entities\Positions;
use Zoe\Entities\Request;
use Zoe\Entities\Sync;
use Zoe\Entities\TermsOfUse;
use Zoe\Entities\Token;
use Zoe\Entities\User;
use Zoe\Entities\Webhook;

class Quovo
{
    const VERSION = '0.0.1';

    protected $app;

    protected $client;

    public function __construct(array $param)
    {
        $this->app = new QuovoApp($param['user'], $param['password']);
        $this->client = new QuovoClient();
    }

    /**
     * @return QuovoApp
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @return Brokerage
     */
    public function brokerage()
    {
        return new Brokerage($this->app, $this->client);
    }

    /**
     * @return User
     */
    public function user()
    {
        return new User($this->app, $this->client);
    }

    /**
     * @return Account
     */
    public function account()
    {
        return new Account($this->app, $this->client);
    }

    /**
     * @return Challenges
     */
    public function challenges()
    {
        return new Challenges($this->app, $this->client);
    }

    /**
     * @return History
     */
    public function history()
    {
        return new History($this->app, $this->client);
    }

    /**
     * @return Iframe
     */
    public function iframe()
    {
        return new Iframe($this->app, $this->client);
    }

    /**
     * @return Portfolio
     */
    public function portfolio()
    {
        return new Portfolio($this->app, $this->client);
    }

    /**
     * @return Positions
     */
    public function positions()
    {
        return new Positions($this->app, $this->client);
    }

    /**
     * @return Request
     */
    public function request()
    {
        return new Request($this->app, $this->client);
    }

    /**
     * @return Sync
     */
    public function sync()
    {
        return new Sync($this->app, $this->client);
    }

    /**
     * @return TermsOfUse
     */
    public function termsOfUse()
    {
        return new TermsOfUse($this->app, $this->client);
    }

    /**
     * @return Token
     */
    public function token()
    {
        return new Token($this->app, $this->client);
    }

    /**
     * @return Webhook
     */
    public function webhook()
    {
        return new Webhook($this->app, $this->client);
    }
}