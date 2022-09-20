# Developer guide for v1

The source code of a `v1` version of this package should just be a copy of the original `v5` version of 
`symfony/cache` package. 

Thus, we only have to modify the `composer.json` and require a `v5` version of `symfony/cache`. We restrict PHP 
version to `>=7.2.5 <8.0.2`.

## Steps for a new tag

- Work on the `v1-php7` branch
- Modify the `v5` version of `symfony/cache` in the `composer.json` file.
- Update the `CROWDSEC_CHANGELOG_V1.md` file by add some `v1.x.y` tag description
- Add, commit and push your modification to the `v1-php7` branch.
- Create and push a tag for this new version:
  - `git tag v1.x.y`
  - `git push origin v1.x.y`
