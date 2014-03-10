Fetch
=====

Temporary replacement for Statamic's get_post plugin

## Usage

Assuming a URL of: /my-url?foo=bar

    {{ fetch key="foo" }}
    Outputs: bar
    {{ fetch key="baz" }}
    Outputs: false
    
In a conditional:

    {{ if {fetch key="foo"} }}
      Yup.
    {{ else }}
      Nope
    {{ endif }}
    
Wanna do POSTs?

    {{ fetch key="foo" type="post" }}
    {{ fetch key="foo" method="post" }}
    
You can use `method` or `type`. Whatever floats your boat.
    
