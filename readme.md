A simple example of a basic page mutation



ADD MUTATION
```$xslt
mutation {
  addPage(input:{title:"Hello", body:"World"}){
    entity{
      ...on NodePage {
        nid
        title
        body{
          value
        }
      }
    }
  }
}

```

RESULT

```$xslt
{
  "data": {
    "addPage": {
      "entity": {
        "nid": 111,
        "title": "Hello",
        "body": {
          "value": "World"
        }
      }
    }
  }
}
```


---


UPDATE MUTATION

```$xslt
mutation {
  updatePage(id:110, input:{title:"Justin"}){
    entity{
      ...on NodePage {
        nid
        title
        body{
          value
        }
      }
    }
  }
}
```


RESULT
```$xslt
{
  "data": {
    "updatePage": {
      "entity": {
        "nid": 111,
        "title": "Justin",
        "body": null
      }
    }
  }
}
```


---


DELETE MUTATION
```$xslt
mutation {
  deletePage(id:111){
    entity{
      ...on NodePage {
        nid
        title
        body{
          value
        }
      }
    }
  }
}

```


RESULT

```$xslt
{
  "data": {
    "deletePage": {
      "entity": {
        "nid": 111,
        "title": "Justin",
        "body": null
      }
    }
  }
}
```