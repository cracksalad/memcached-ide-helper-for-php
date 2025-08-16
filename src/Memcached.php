<?php

/**
 * @author Andreas Wahlen
 * @version 3.2.0
 */
class Memcached {
  
  // options
  
  public const OPT_COMPRESSION = -1001;
  public const OPT_PREFIX_KEY = -1002;
  public const OPT_SERIALIZER = -1003;
  public const OPT_COMPRESSION_TYPE = -1004;
  public const OPT_STORE_RETRY_COUNT = -1005;
  public const OPT_USER_FLAGS = -1006;
  public const MEMC_OPT_COMPRESSION_LEVEL = -1007;
  public const MEMC_OPT_ITEM_SIZE_LIMIT = -1008;
  public const OPT_NO_BLOCK = 0;
  public const OPT_TCP_NODELAY = 1;
  public const OPT_HASH = 2;
  public const OPT_SOCKET_SEND_SIZE = 4;
  public const OPT_SOCKET_RECV_SIZE = 5;
  public const OPT_CACHE_LOOKUPS = 6;
  public const OPT_POLL_TIMEOUT = 8;
  public const OPT_DISTRIBUTION = 9;
  public const OPT_BUFFER_WRITES = 10;
  public const OPT_SORT_HOSTS = 12;
  public const OPT_VERIFY_KEY = 13;
  public const OPT_CONNECT_TIMEOUT = 14;
  public const OPT_RETRY_TIMEOUT = 15;
  public const OPT_LIBKETAMA_COMPATIBLE = 16;
  public const OPT_LIBKETAMA_HASH = 17;
  public const OPT_BINARY_PROTOCOL = 18;
  public const OPT_SEND_TIMEOUT = 19;
  public const OPT_RECV_TIMEOUT = 20;
  public const OPT_SERVER_FAILURE_LIMIT = 21;
  public const OPT_HASH_WITH_PREFIX_KEY = 25;
  public const OPT_NOREPLY = 26;
  public const OPT_USE_UDP = 27;
  public const OPT_AUTO_EJECT_HOSTS = 28;
  public const OPT_NUMBER_OF_REPLICAS = 29;
  public const OPT_RANDOMIZE_REPLICA_READ = 30;
  public const OPT_TCP_KEEPALIVE = 32;
  public const OPT_REMOVE_FAILED_SERVERS = 35;
  public const OPT_DEAD_TIMEOUT = 36;
  public const OPT_SERVER_TIMEOUT_LIMIT = 37;
  
  
  // hash option values
  
  public const HASH_DEFAULT = 0;
  public const HASH_MD5 = 1;
  public const HASH_CRC = 2;
  public const HASH_FNV1_64 = 3;
  public const HASH_FNV1A_64 = 4;
  public const HASH_FNV1_32 = 5;
  public const HASH_FNV1A_32 = 6;
  public const HASH_HSIEH = 7;
  public const HASH_MURMUR = 8;
  
  
  // distribution option values
  
  public const DISTRIBUTION_MODULA = 0;
  public const DISTRIBUTION_CONSISTENT = 1;
  public const DISTRIBUTION_VIRTUAL_BUCKET = 6;
  
  
  // supported serializers
  
  public const HAVE_JSON = true;
  public const HAVE_IGBINARY = true;
  public const HAVE_MSGPACK = true;
  public const HAVE_ENCODING = true;
  
  
  // supported features
  
  public const HAVE_SESSION = true;
  public const HAVE_SASL = true;
  
  
  // serializer option values
  
  public const SERIALIZER_PHP = 1;
  public const SERIALIZER_IGBINARY = 2;
  public const SERIALIZER_JSON = 3;
  public const SERIALIZER_JSON_ARRAY = 4;
  public const SERIALIZER_MSGPACK = 5;
  
  
  // compression option values
  
  public const COMPRESSION_ZLIB = 1;
  public const COMPRESSION_FASTLZ = 2;
  public const COMPRESSION_ZSTD = 3;
  
  
  // flags for get and getMulti operations.
  
  /*
   * Whether to preserve key order in the result
   */
  public const GET_PRESERVE_ORDER = 1;
  
  /*
   * Whether to fetch CAS token as well (use "gets").
   */
  public const GET_EXTENDED = 2;
  
  
  // return values
  
  public const RES_PAYLOAD_FAILURE = -1001;
  public const RES_SUCCESS = 0;
  public const RES_FAILURE = 1;
  public const RES_HOST_LOOKUP_FAILURE = 2;
  public const RES_CONNECTION_FAILURE = 3;
  public const RES_CONNECTION_BIND_FAILURE = 4;
  public const RES_WRITE_FAILURE = 5;
  public const RES_READ_FAILURE = 6;
  public const RES_UNKNOWN_READ_FAILURE = 7;
  public const RES_PROTOCOL_ERROR = 8;
  public const RES_CLIENT_ERROR = 9;
  public const RES_SERVER_ERROR = 10;
  public const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;
  public const RES_DATA_EXISTS = 12;
  public const RES_DATA_DOES_NOT_EXIST = 13;
  public const RES_NOTSTORED = 14;
  public const RES_STORED = 15;
  public const RES_NOTFOUND = 16;
  public const RES_MEMORY_ALLOCATION_FAILURE = 17;
  public const RES_PARTIAL_READ = 18;
  public const RES_SOME_ERRORS = 19;
  public const RES_NO_SERVERS = 20;
  public const RES_END = 21;
  public const RES_DELETED = 22;
  public const RES_VALUE = 23;
  public const RES_STAT = 24;
  public const RES_ITEM = 25;
  public const RES_ERRNO = 26;
  public const RES_FAIL_UNIX_SOCKET = 27;
  public const RES_NOT_SUPPORTED = 28;
  public const RES_NO_KEY_PROVIDED = 29;
  public const RES_FETCH_NOTFINISHED = 30;
  public const RES_TIMEOUT = 31;
  public const RES_BUFFERED = 32;
  public const RES_BAD_KEY_PROVIDED = 33;
  public const RES_INVALID_HOST_PROTOCOL = 34;
  public const RES_SERVER_MARKED_DEAD = 35;
  public const RES_UNKNOWN_STAT_KEY = 36;
  public const RES_E2BIG = 37;
  public const RES_INVALID_ARGUMENTS = 38;
  public const RES_KEY_TOO_BIG = 39;
  public const RES_AUTH_PROBLEM = 40;
  public const RES_AUTH_FAILURE = 41;
  public const RES_AUTH_CONTINUE = 42;
  public const RES_PARSE_ERROR = 43;
  public const RES_PARSE_USER_ERROR = 44;
  public const RES_DEPRECATED = 45;
  public const RES_IN_PROGRESS = 46;
  public const RES_SERVER_TEMPORARILY_DISABLED = 47;
  public const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;
  public const RES_MAXIMUM_RETURN = 49;
  
  
  public const ON_CONNECT = 0;
  public const ON_ADD = 1;
  public const ON_APPEND = 2;
  public const ON_DECREMENT = 3;
  public const ON_DELETE = 4;
  public const ON_FLUSH = 5;
  public const ON_GET = 6;
  public const ON_INCREMENT = 7;
  public const ON_NOOP = 8;
  public const ON_PREPEND = 9;
  public const ON_QUIT = 10;
  public const ON_REPLACE = 11;
  public const ON_SET = 12;
  public const ON_STAT = 13;
  public const ON_VERSION = 14;
  
  
  public const RESPONSE_SUCCESS = 0;
  public const RESPONSE_KEY_ENOENT = 1;
  public const RESPONSE_KEY_EEXISTS = 2;
  public const RESPONSE_E2BIG = 3;
  public const RESPONSE_EINVAL = 4;
  public const RESPONSE_NOT_STORED = 5;
  public const RESPONSE_DELTA_BADVAL = 6;
  public const RESPONSE_NOT_MY_VBUCKET = 7;
  public const RESPONSE_AUTH_ERROR = 32;
  public const RESPONSE_AUTH_CONTINUE = 33;
  public const RESPONSE_UNKNOWN_COMMAND = 129;
  public const RESPONSE_ENOMEM = 130;
  public const RESPONSE_NOT_SUPPORTED = 131;
  public const RESPONSE_EINTERNAL = 132;
  public const RESPONSE_EBUSY = 133;
  public const RESPONSE_ETMPFAIL = 134;
  public const GET_ERROR_RETURN_VALUE = false;
  
  
  public function __construct(?string $persistent_id=null, ?callable $callback=null, ?string $connection_str=null) {}
  
  public function getResultCode(): int {}
  
  public function getResultMessage(): string {}
  
  /**
   * @psalm-param null|callable(Memcached,string,&mixed):bool $cache_cb
   */
  public function get(string $key, ?callable $cache_cb=null, int $get_flags=0): mixed {}
  
  /**
   * @psalm-param null|callable(Memcached,string,&mixed):bool $cache_cb
   */
  public function getByKey(string $server_key, string $key, ?callable $cache_cb=null, int $get_flags=0): mixed {}
  
  /**
   * @param string[] $keys
   * @psalm-return false|array<string,mixed>
   */
  public function getMulti(array $keys, int $get_flags=0): false|array {}
  
  /**
   * @param string[] $keys
   * @psalm-return false|array<string,mixed>
   */
  public function getMultiByKey(string $server_key, array $keys, int $get_flags=0): false|array {}
  
  /**
   * @psalm-param null|callable(Memcached,mixed):void $value_cb
   */
  public function getDelayed(array $keys, bool $with_cas=false, ?callable $value_cb=null): bool {}
  
  /**
   * @psalm-param null|callable(Memcached,mixed):void $value_cb
   */
  public function getDelayedByKey(string $server_key, array $keys, bool $with_cas=false, ?callable $value_cb=null): bool {}
  
  /**
   * @psalm-return false|array{key:string,value:mixed,cas:float}
   */
  public function fetch(): false|array {}
  
  /**
   * @psalm-return false|list<array{key:string,value:mixed,cas:float}>
   */
  public function fetchAll(): false|array {}
  
  public function set(string $key, mixed $value, int $expiration=0): bool {}
  
  public function setByKey(string $server_key, string $key, mixed $value, int $expiration=0): bool {}
  
  public function touch(string $key, int $expiration=0): bool {}
  
  public function touchByKey(string $server_key, string $key, int $expiration=0): bool {}
  
  /**
   * @psalm-param array<string,mixed> $items
   */
  public function setMulti(array $items, int $expiration=0): bool {}
  
  /**
   * @psalm-param array<string,mixed> $items
   */
  public function setMultiByKey(string $server_key, array $items, int $expiration=0): bool {}
  
  public function cas(string $cas_token, string $key, mixed $value, int $expiration=0): bool {}
  
  public function casByKey(string $cas_token, string $server_key, string $key, mixed $value, int $expiration=0): bool {}
  
  public function add(string $key, mixed $value, int $expiration=0): bool {}
  
  public function addByKey(string $server_key, string $key, mixed $value, int $expiration=0): bool {}
  
  public function append(string $key, string $value): ?bool {}
  
  public function appendByKey(string $server_key, string $key, string $value): ?bool {}
  
  public function prepend(string $key, string $value): ?bool {}
  
  public function prependByKey(string $server_key, string $key, string $value): ?bool {}
  
  public function replace(string $key, mixed $value, int $expiration=0): bool {}
  
  public function replaceByKey(string $server_key, string $key, mixed $value, int $expiration=0): bool {}
  
  public function delete(string $key, int $time=0): bool {}
  
  /**
   * @param string[] $keys
   * @psalm-return array<string,true|self::RES_*>
   */
  public function deleteMulti(array $keys, int $time=0): array {}
  
  public function deleteByKey(string $server_key, string $key, int $time=0): bool {}
  
  /**
   * @param string[] $keys
   * @psalm-return array<string,true|self::RES_*>
   */
  public function deleteMultiByKey(string $server_key, array $keys, int $time=0): array {}
  
  public function increment(string $key, int $offset=1, int $initial_value=0, int $expiry=0): false|int {}
  
  public function decrement(string $key, int $offset=1, int $initial_value=0, int $expiry=0): false|int {}
  
  public function incrementByKey(string $server_key, string $key, int $offset=1, int $initial_value=0, int $expiry=0): false|int {}
  
  public function decrementByKey(string $server_key, string $key, int $offset=1, int $initial_value=0, int $expiry=0): false|int {}
  
  public function addServer(string $host, int $port, int $weight=0): bool {}
  
  /**
   * @psalm-param array<array{0:string,1:int,2:int}> $servers
   */
  public function addServers(array $servers): bool {}
  
  /**
   * @psalm-return list<array{host:string,port:int,weight:int}>
   */
  public function getServerList(): array {}
  
  /**
   * @psalm-return false|array{host:string,port:int,weight:int}
   */
  public function getServerByKey(string $server_key): false|array {}
  
  public function resetServerList(): bool {}
  
  public function quit(): bool {}
  
  public function flushBuffers(): bool {}
  
  public function getLastErrorMessage(): string {}
  
  public function getLastErrorCode(): int {}
  
  public function getLastErrorErrno(): int {}
  
  /**
   * @psalm-return false|array{host:string,port:int,weight:int}
   */
  public function getLastDisconnectedServer(): false|array {}
  
  /**
   * @psalm-return false|array<string,array{
   *      pid:int,
   *      uptime:int,
   *      threads:int,
   *      time:int,
   *      pointer_size:int,
   *      rusage_user_seconds:int,
   *      rusage_user_microseconds:int,
   *      rusage_system_seconds:int,
   *      rusage_system_microseconds:int,
   *      curr_items:int,
   *      total_items:int,
   *      limit_maxbytes:int,
   *      curr_connections:int,
   *      total_connections:int,
   *      connection_structures:int,
   *      bytes:int,
   *      cmd_get:int,
   *      cmd_set:int,
   *      get_hits:int,
   *      get_misses:int,
   *      evictions:int,
   *      bytes_read:int,
   *      bytes_written:int,
   *      version:string}>
   */
  public function getStats(?string $type=null): false|array {}
  
  /**
   * @return false|string[]
   * @psalm-return false|array<string,string>
   */
  public function getVersion(): false|array {}
  
  /**
   * @return false|string[]
   * @psalm-return false|list<string>
   */
  public function getAllKeys(): false|array {}
  
  public function flush(int $delay=0): bool {}
  
  public function getOption(int $option): mixed {}
  
  public function setOption(int $option, mixed $value): bool {}
  
  /**
   * @psalm-param array<int,mixed> $options
   */
  public function setOptions(array $options): bool {}
  
  public function setBucket(array $host_map, ?array $forward_map, int $replicas): bool {}
  
  public function setSaslAuthData(string $username, string $password): bool {}
  
  public function setEncodingKey(string $key): bool {}

  public function isPersistent(): bool {}
  
  public function isPristine(): bool {}
  
  public function checkKey(string $key): bool {}
}
