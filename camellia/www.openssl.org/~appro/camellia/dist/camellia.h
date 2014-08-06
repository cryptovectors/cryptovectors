/* ====================================================================
 * Copyright 2006,2007 NTT (Nippon Telegraph and Telephone Corporation) . 
 * ALL RIGHTS RESERVED.
 *
 * Intellectual Property information for Camellia:
 *     http://info.isl.ntt.co.jp/crypt/eng/info/chiteki.html
 *
 * News Release for Announcement of Camellia open source:
 *     http://www.ntt.co.jp/news/news06e/0604/060413a.html
 */
#ifndef HEADER_CAMELLIA_H
#define HEADER_CAMELLIA_H

#ifdef  __cplusplus
extern "C" {
#endif

#define CAMELLIA_BLOCK_SIZE 16
#define CAMELLIA_TABLE_BYTE_LEN 272
#define CAMELLIA_TABLE_WORD_LEN (CAMELLIA_TABLE_BYTE_LEN / 4)

typedef unsigned int KEY_TABLE_TYPE[CAMELLIA_TABLE_WORD_LEN];

/*
 * This is original Camellia interface with minor modification.
 * Originally Camellia_Ekeygen was not returning any value,
 * now it returns grand round counter: 3 or 4. This does not
 * break binary compatibility and new module can still be
 * linked with old code.
 */
int  Camellia_Ekeygen(int keyBitLength,
		      const unsigned char *rawKey,
		      KEY_TABLE_TYPE keyTable);
void Camellia_EncryptBlock(int keyBitLength,
			   const unsigned char *plaintext,
			   const KEY_TABLE_TYPE keyTable,
			   unsigned char *ciphertext);
void Camellia_DecryptBlock(int keyBitLength,
			   const unsigned char *ciphertext,
			   const KEY_TABLE_TYPE keyTable,
			   unsigned char *plaintext);

#ifdef  __cplusplus
}
#endif
/*
 * ====================================================================
 */

#include <stddef.h>

#ifdef  __cplusplus
extern "C" {
#endif

/*
 * This is newly introduced interface with grand round counter as
 * input argument, as opposite to key bit-length.
 */
void Camellia_EncryptBlock_Rounds(int grandRounds,
				  const unsigned char *plaintext,
				  const KEY_TABLE_TYPE keyTable,
				  unsigned char *ciphertext);
void Camellia_DecryptBlock_Rounds(int grandRounds,
				  const unsigned char *ciphertext,
				  const KEY_TABLE_TYPE keyTable,
				  unsigned char *plaintext);

/*
 * This is additional interface implemented in assembler for better
 * CBC performance.
 */
typedef struct camellia_key_st 
	{
	union	{
		double d;	/* ensures 64-bit align */
		KEY_TABLE_TYPE rd_key;
		} u;
	int grand_rounds;	/* see below */
	} CAMELLIA_KEY;
/*
 * Provided that "key" is a pointer to CAMELLIA_KEY structure it
 * would have to be initialized as following:
 * 
 * key->grand_rounds=Camellia_Ekeygen(keyBitLength,rawKey,key->u.rd_key);
 */
#define CAMELLIA_ENCRYPT	1
#define CAMELLIA_DECRYPT	0

void Camellia_cbc_encrypt(const unsigned char *in,
			  unsigned char *out,
			  size_t length,
			  const CAMELLIA_KEY *key,
			  unsigned char *ivec,
			  int enc);

#ifdef  __cplusplus
}
#endif

#endif /* HEADER_CAMELLIA_H */
