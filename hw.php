<?php

abstract class AbstractRepository
{
    protected $connection;
    protected $record;
    protected $builder;

    abstract public function dbConnection($connection): AbstractRepository;

    abstract public function dbRecord($record): AbstractRepository;

    abstract public function dbBuilder($builder): AbstractRepository;
}

class MySQLFactory extends AbstractRepository
{
    public function dbConnection($connection): AbstractRepository
    {
        return new MySQLFactory($connection);
    }

    public function dbRecord($record): AbstractRepository
    {
        return new MySQLFactory($record);
    }

    public function dbBuilder($builder): AbstractRepository
    {
        return new MySQLFactory($builder);
    }
}

class PostgreSQLFactory extends AbstractRepository
{
    public function dbConnection($connection): AbstractRepository
    {
        return new PostgreSQLFactory($connection);
    }

    public function dbRecord($record): AbstractRepository
    {
        return new PostgreSQLFactory($record);
    }

    public function dbBuilder($builder): AbstractRepository
    {
        return new PostgreSQLFactory($builder);
    }
}

class OracleFactory extends AbstractRepository
{
    public function dbConnection($connection): AbstractRepository
    {
        return new OracleFactory($connection);
    }

    public function dbRecord($record): AbstractRepository
    {
        return new OracleFactory($record);
    }

    public function dbBuilder($builder): AbstractRepository
    {
        return new OracleFactory($builder);
    }
}
