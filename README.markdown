# Test vectors for cryptographic primitives

## Existing test vectors

Organization:

    primitive/source/...

## Things to be done

### File formats

*TODO* Standardize on a file format; preferably something that requires
even less parsing than NIST's RSP/FAX format.

(coruus's criteria: easy to parse in C. jedisct1's criteria: easy to parse
in brainfuck.)


### Symmetric crypto

Useful things: Provide test-vectors for purely structural features;
e.g., for padding rules etc. This is usually where code goes wrong.


### Elliptic-curve crypto

Needed scripts (Sage?), perhaps see http://hyperelliptic.org/EFD/:

  - Generate "golden" test-vectors from curve parameters
  - Convert between *curve* representations
  - Convert between *point* representations

Other things to do:

  - Curve OIDs?
  - Simple script to transform various wire formats.
  - Safecurves proofs?


## License 

License: Test vectors for an algorithm are not original works.
They are in the public domain.

Any scripts in this repo are licensed CC0.

(Different licenses may apply to other material surrounding test
vectors which have not been extracted from source code.)
