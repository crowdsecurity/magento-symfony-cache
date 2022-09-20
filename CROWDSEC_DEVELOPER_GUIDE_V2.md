# Developer guide for v2

The source code of a `v2` version of this package should just be a copy of the original `v5` version of 
`symfony/cache` package, but with some modification to make it compatible with PHP 8 signatures.

Thus, we copy the source code of a `v5` version of `symfony/cache`. ANd we overwrite some files with the latest `v6` 
version.

## Steps for a new tag

We will use the following structure as example.

```
crowdsec
│   
│
└───magento-symfony-cache
│   │   
│   │ (Cloned sources of this repo)
│   
└───symfony-cache-origin
    │   
    │(Cloned sources of git@github.com:symfony/cache.git repo)
         
```

- In the `magento-symfony-cache`, checkout to the `branch-2.0.0-php-8` branch

### Copy of some `v5` files




- In the `symfony-cache-origin` folder, checkout to the latest `v5.x.y` `symfony/cache` tags:
    - `cd symfony-cache-origin`
    - `git checkout v5.x.y`


- In this `crowdsec/magento-symfony-cache` source folder, search for `We copy the` and copy the result in `.
  modified_files.txt` file:
  - `grep  -rl "We copy the 6." * --exclude='*.md' | > .modified_files.txt`



- Copy all files from  `symfony-cache-origin` except those from `modified_files.txt` file and other specified files:

```bash
rsync -rv --exclude-from=./.modified_files.txt --exclude 'composer.json' --exclude '.idea' --exclude '.git' ../symfony-cache-origin/  ./
```

- Commit modification with some message like `feat(*): Update files to 5.x.y version of symfony/cache`


### Copy of some `v6` files

- In the `symfony-cache-origin` folder, retrieve and checkout to the latest `v6.0` `symfony/cache` tags:
  - `git fetch origin`
  - `git checkout v6.0.x`


- Replace each specific file with a copy of `symfony-cache-origin` file 

```bash
rsync -rv --files-from=./.modified_files.txt  --exclude '.git' ../symfony-cache-origin/  ./
```

- For each modified file, add the comment `We copy the 6.0.x version on symfony/cache package`


- Commit modification with some message like `feat(*): Update specifics files to 6.0.y version of symfony/cache`


### Final step

- Update the `replace` part of the `composer.json` to match with the new `v5.x.y` replaced version of 
  `symfony/cache` package.


**N.B**: This specific version must be exactly required in the `crowdsec/bouncer` package before updating the 
Magento 2 module to use the new tag of `crowdsec/magento-symfony-cache` that we will push below.

  
- Update the `CROWDSEC_CHANGELOG_V2.md` file by add some `v2.x.y` tag description


- Add, commit and push your modification to the `branch-2.0.0-php-8` branch.


- Create and push a tag for this new version:
  - `git tag v2.x.y`
  - `git push origin v2.x.y`
