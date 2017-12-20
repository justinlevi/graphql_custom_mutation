An example of a simple basic page mutation




MUTATION
```$xslt
mutation {
  page(input:{title:"Helo", body:"World"}){
    entity{
      ...on NodePage {
        title
      }
    }
  }
}

```

RESULT

```$xslt
{
  "data": {
    "page": {
      "entity": {
        "title": "Hello"
      }
    }
  }
}
```