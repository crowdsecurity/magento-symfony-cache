# Developer guide for v3

The source code of a `v3` version of this package should just be a mirror version of `symfony/cache` package. 

Thus, we only have to modify the `composer.json` and require some versions of `symfony/cache`. We 
also restrict PHP version to `>=7.2.5`.

## Steps for a new tag

- Work on the `v3` branch
- Modify the versions of `symfony/cache` in the `composer.json` file.
- Update the `CROWDSEC_CHANGELOG_V3.md` file by add some `v3.x.y` tag description
- Add, commit and push your modification to the `v3` branch.
- Create and push a tag for this new version:
  - `git tag v3.x.y`
  - `git push origin v3.x.y`
