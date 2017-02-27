TextKernel API
==============

This is a small implementation of the sourcebox extract API   
Contributions are welcome.

## Usage with Symfony

### Configuration

In your service.yml

```yaml
    textkernel.factory:
        class: Eoko\TextKernel\Factory\TextKernelFactory
        
    textkernel.api.servicebox:
        class: Eoko\TextKernel\Api\SourceboxApi
        factory: [ '@textkernel.factory', createSourceboxApi ]
        arguments:
            - '%textkernel_account%'
            - '%textkernel_username%'
            - '%textkernel_password%'
```

In your parameters.yml
```yaml
parameters:
    textkernel_account: change_me
    textkernel_username: change_me
    textkernel_password: ######
```

### Usage

In a container aware class

```php
    $api = $this->get('textkernel.api.servicebox');
    
    try {
        /** @param \Eoko\TextKernel\Model\CvModel $cv */
        $cv = $api->extractFromFile($filepath);
        // or
        $cv = $api->extract($cvBuffer);
    } catch(\Exception $e) {
        //handle errors
    }
```

## Raw usage
```php
    use Eoko\TextKernel\Factory\TextKernelFactory;
    
    $account = 'change_me';
    $username = 'change_me';
    $password = '########';
    
    $factory = new TextKernelFactory();
    $api = $factory->createSourceboxApi($account, $username, $password);
    
    try {
        /** @param \Eoko\TextKernel\Model\CvModel $cv */
        $cv = $api->extractFromFile($filepath);
        // or
        $cv = $api->extract($cvBuffer);
    } catch(\Exception $e) {
        //handle errors
    }
```
