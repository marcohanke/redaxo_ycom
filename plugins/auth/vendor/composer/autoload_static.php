<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6893c41d1d4abf329bc60826da2d4d1a
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RobRichards\\XMLSecLibs\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'O' => 
        array (
            'OneLogin\\' => 9,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RobRichards\\XMLSecLibs\\' => 
        array (
            0 => __DIR__ . '/..' . '/robrichards/xmlseclibs/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'OneLogin\\' => 
        array (
            0 => __DIR__ . '/..' . '/onelogin/php-saml/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'CAS_AuthenticationException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/AuthenticationException.php',
        'CAS_Client' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Client.php',
        'CAS_CookieJar' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/CookieJar.php',
        'CAS_Exception' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Exception.php',
        'CAS_GracefullTerminationException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/GracefullTerminationException.php',
        'CAS_InvalidArgumentException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/InvalidArgumentException.php',
        'CAS_Languages_Catalan' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/Catalan.php',
        'CAS_Languages_ChineseSimplified' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/ChineseSimplified.php',
        'CAS_Languages_English' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/English.php',
        'CAS_Languages_French' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/French.php',
        'CAS_Languages_Galego' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/Galego.php',
        'CAS_Languages_German' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/German.php',
        'CAS_Languages_Greek' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/Greek.php',
        'CAS_Languages_Japanese' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/Japanese.php',
        'CAS_Languages_LanguageInterface' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/LanguageInterface.php',
        'CAS_Languages_Portuguese' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/Portuguese.php',
        'CAS_Languages_Spanish' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Languages/Spanish.php',
        'CAS_OutOfSequenceBeforeAuthenticationCallException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/OutOfSequenceBeforeAuthenticationCallException.php',
        'CAS_OutOfSequenceBeforeClientException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/OutOfSequenceBeforeClientException.php',
        'CAS_OutOfSequenceBeforeProxyException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/OutOfSequenceBeforeProxyException.php',
        'CAS_OutOfSequenceException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/OutOfSequenceException.php',
        'CAS_PGTStorage_AbstractStorage' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/PGTStorage/AbstractStorage.php',
        'CAS_PGTStorage_Db' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/PGTStorage/Db.php',
        'CAS_PGTStorage_File' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/PGTStorage/File.php',
        'CAS_ProxiedService' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService.php',
        'CAS_ProxiedService_Abstract' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Abstract.php',
        'CAS_ProxiedService_Exception' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Exception.php',
        'CAS_ProxiedService_Http' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Http.php',
        'CAS_ProxiedService_Http_Abstract' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Http/Abstract.php',
        'CAS_ProxiedService_Http_Get' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Http/Get.php',
        'CAS_ProxiedService_Http_Post' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Http/Post.php',
        'CAS_ProxiedService_Imap' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Imap.php',
        'CAS_ProxiedService_Testable' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxiedService/Testable.php',
        'CAS_ProxyChain' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxyChain.php',
        'CAS_ProxyChain_AllowedList' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxyChain/AllowedList.php',
        'CAS_ProxyChain_Any' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxyChain/Any.php',
        'CAS_ProxyChain_Interface' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxyChain/Interface.php',
        'CAS_ProxyChain_Trusted' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxyChain/Trusted.php',
        'CAS_ProxyTicketException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/ProxyTicketException.php',
        'CAS_Request_AbstractRequest' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Request/AbstractRequest.php',
        'CAS_Request_CurlMultiRequest' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Request/CurlMultiRequest.php',
        'CAS_Request_CurlRequest' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Request/CurlRequest.php',
        'CAS_Request_Exception' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Request/Exception.php',
        'CAS_Request_MultiRequestInterface' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Request/MultiRequestInterface.php',
        'CAS_Request_RequestInterface' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Request/RequestInterface.php',
        'CAS_Session_PhpSession' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/Session/PhpSession.php',
        'CAS_TypeMismatchException' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS/TypeMismatchException.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'phpCAS' => __DIR__ . '/..' . '/apereo/phpcas/source/CAS.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6893c41d1d4abf329bc60826da2d4d1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6893c41d1d4abf329bc60826da2d4d1a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6893c41d1d4abf329bc60826da2d4d1a::$classMap;

        }, null, ClassLoader::class);
    }
}
