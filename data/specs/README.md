


```
php fetch-status.php
```

This downloads the csv snapshot of the current document status. It will separate these out into RFCs, I-Ds and individual drafts. It will create a file in the `data/drafts/*` folder for each draft, updating the properties if the file already exists.

```
php fetch-spec-info.php draft-ietf-name
```

This fetches a single draft XML file to parse it for author and version information. This information is added to the `status.json` file if found. Run this when a new draft is submitted to the working group.

```
php update-author-index.php
```

Run this last to update the `data/authors.yml` file with all authors found across all documents.

