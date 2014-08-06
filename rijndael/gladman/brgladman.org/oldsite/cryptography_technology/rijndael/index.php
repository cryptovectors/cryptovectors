
<html>

<head>
<title>Cryptography Technology</title>
</head>

<body bgcolor="#FFFFFF">

<table cellpadding="0" cellspacing="10" width="100%">
	<tr>
		<td align="left" valign="top" width="1%">
		
<p align="center">
<img border="0" height="200" src="../../borders/cath.jpg" width="150">&nbsp;&nbsp;&nbsp;&nbsp;
<table border="0" cellpadding="2" cellspacing="0">
	<tr>
		<td><font face="Arial" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td colspan="2"><font face="Arial Narrow" size="2">
		<a href="../../index.php">About Me</a></font></td>
	</tr>
	<tr>
		<td><font face="Arial" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td colspan="2">
		<font face="Arial Narrow" size="2"><a href="../../career/index.php">Background</a></font></td>
	</tr>
	<tr>
		<td><font face="Arial" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td colspan="2"><font face="Arial Narrow" size="2">Policy Analysis</font></td>
	</tr>
	<tr>
		<td></td>
		<td><font face="Arial Narrow" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td><a href="../../policy_orgs.php"><font face="Arial Narrow" size="2">Organisations</font></a></td>
	</tr>
	<tr>
		<td></td>
		<td><font face="Arial Narrow" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td><a href="../../cryptography_policy/index.php">
		<font face="Arial Narrow" size="2">Cryptography</font></a></td>
	</tr>
	<tr>
		<td><font face="Arial" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td colspan="2"><font face="Arial Narrow" size="2">Technology</font></td>
	</tr>
	<tr>
		<td></td>
		<td><font face="Arial Narrow" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td><a href="../../cryptography_technology/index.php">
		<font face="Arial Narrow" size="2">Cryptography</font></a></td>
	</tr>
	<tr>
		<td></td>
		<td><font face="Arial Narrow" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td><font face="Arial Narrow" size="2"><a href="../../computing/index.php">
		Computing</a></font></td>
	</tr>
	<tr>
		<td></td>
		<td><font face="Arial Narrow" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td><font face="Arial Narrow" size="2">Mathematics</font></td>
	</tr>
	<tr>
		<td><font face="Arial" size="2">
		<img border="0" height="17" src="../../borders/bullet.gif" width="17"></font></td>
		<td colspan="2"><a href="../../papers/index.php">
		<font face="Arial Narrow" size="2">Papers</font></a></td>
	</tr>
</table>
</p>
<p align="center"><a href="http://www.no2id.net/">
<img alt="NO2ID - Stop ID cards and the database state" src="http://www.no2id.net/images/buttons/square_1.gif" style="width: 120px; height: 90px; border: 0" /></a>
</p>
		<td align="left" valign="top" width="100%">
		<h1><font color="#0000FF" face="Arial">Implementations of AES (Rijndael) 
		in C/C++ and Assembler</font></h1>
		<ol>
			<li>6th December - improved the Visual Basic for Applications (VBA) 
			example of how the AES DLL<br>is used from VBA and added a Microsoft 
			Word document that contains this VBA source code. </li>
			<li>16th January 2002 - Significant simplification and restructuring 
			of the code to make it easier to use.<br>BUT NOTE that there are changes 
			to the cipher interface.&nbsp; My thanks to David Hopwood for finding
			<br>an error in the interface code and to Nigel Metheringham for some 
			restructuring suggestions.</li>
			<li>21st January - update to make code integration easier (suggested 
			by Peter Gutmann).</li>
			<li>28th January - update to correct an error in endian detection (my 
			thanks to Gary Gorbet for testing <br>this release on a wide range of 
			big and little endian systems).</li>
			<li>8th February - update to overcome macro expansion limits in some 
			compilers when compiling aestab.c <br>(reported by Peter Gutmann).</li>
			<li>5th April 2002 - minor release to remove a few TAB characters that 
			confused some compilers and to add <br>project files for Visual Studio 
			.Net development.</li>
			<li>8th June 2002 - a small update to remove a compilation failure that 
			occurred on a rare combination of options <br>(reported by Atasu Kubilay).</li>
			<li>27 September 2002 - this release does not involve any bug fixes.&nbsp; 
			It removes the use of the &#39;standard&#39; fixed <br>width integer types (more 
			trouble than they are worth at the moment).&nbsp; It also changes the 
			AES example <br>code to use ciphertext stealing.</li>
			<li><font color="#FF0000">6th June 2003 - added revised code for AES 
			with support for royalty free combined encryption/authentication modes
			</font></li>
		</ol>
		<h2><font color="#0000FF" face="Arial">New Code</font></h2>
		<p><font face="Arial">I have recently updated my AES code and the new version 
		is available <a href="../../cryptography_technology/rijndael/../../AES/index.php">here</a>.&nbsp; Since the interface 
		has changed, the previous version remains available here but it won&#39;t now 
		be updated.&nbsp; The main aim of the new code is to concentrate on AES 
		only and to offer a simpler interface with more compile time parameter checking.&nbsp;&nbsp; 
		The new code also supports x86 assembler versions for both integer and MMX 
		operations and can achieve about 17 cycles per byte on a P4 processor (the 
		best code achieves about 14 cycles per byte but is not free).</font></p>
		<h2><font color="#0000FF" face="Arial">Algorithm Specification</font></h2>
		<p><font face="Arial">I have taken an interest in helping to ensure that 
		the Rijndael and AES specifications are effective from an implementation 
		perspective and I wrote an early input paper to the US NIST
		<a href="http://csrc.nist.gov/encryption/aes/">AES FIPS</a> development 
		with this in mind. I have since further developed this original input document 
		into a full description of Rijndael which I make available
		<a href="../../cryptography_technology/rijndael/aes.spec.v316.pdf">here</a> as a Adobe Acrobat PDF file.</font></p>
		<h2><font color="#0000FF" face="Arial">Algorithm Code in C/C++</font></h2>
		<p><font face="Arial">This code implements both AES and Rijndael. The standard 
		code implements block sizes of 16, 24 and 32 bytes, fixed during compilation, 
		and a variable block size option covering these block sizes chosen at time 
		of use. Each of these options operates with key sizes of 16, 24 and 32 bytes 
		chosen at time of use.&nbsp; An alternative implementation offers block 
		and key sizes of 16, 20, 24, 28 and 32 bytes.</font></p>
		<p><font face="Arial">The standard implementation provides AES when implemented 
		with a block size of 16 bytes.&nbsp; This is heavily optimised, especially 
		for the 16 byte key size.&nbsp; The variable block size option is much slower 
		and is not recommended unless this is really needed. The alternative implementation 
		is also less optimised.</font></p>
		<p><font face="Arial">The code is arranged so that encryption and decryption 
		operations are entirely separate so that encryption only and decryption 
		only applications can be produced without the overhead of the other mode.&nbsp; 
		This has been possible because speed optimisations have allowed the decryption 
		schedule to be compiled directly without relying on the encryption key schedule 
		without compromising speed.&nbsp; </font></p>
		<p><font face="Arial">The C interface is:</font></p>
		<blockquote>
			<p><b><font face="Courier New" size="2">aes_rval aes_blk_len(unsigned 
			int blen, aes_ctx cx[1]); /* set the block length (if it is variable) 
			*/ <br><br>aes_rval aes_enc_key(const unsigned char in_key[], unsigned 
			int klen, aes_ctx cx[1]);&nbsp;&nbsp;&nbsp; /* set the encryption key 
			*/<br>aes_rval aes_enc_blk(const unsigned char in_blk[], unsigned char 
			out_blk[], const aes_ctx cx[1]); /* encrypt block */<br><br>aes_rval 
			aes_dec_key(const unsigned char in_key[], unsigned int klen, aes_ctx 
			cx[1]);&nbsp;&nbsp; /* set the decryption key */<br>aes_rval aes_dec_blk(const 
			unsigned char in_blk[], unsigned char out_blk[], const aes_ctx cx[1]);/* 
			decrypt block */</font></b></p>
		</blockquote>
		<p><font face="Arial">The code has also been optimised so that only the 
		tables required are compiled into the code. It has also been divided into 
		components so that the compilation options can be more easily set (these 
		are also more fully explained).&nbsp;&nbsp; Lastly there is fully integrated 
		x86 assembler code for the standard AES encryption and decryption operations.</font></p>
		<p><font face="Arial">This code supports all Rijndael block sizes. It can 
		be compiled with a fixed or a variable block size (although the latter involves 
		a very significant performance penalty). The block and key sizes are specified 
		in units of bytes to match the associated input arrays (legal values 16, 
		24 and 32) . The input parameters are checked for correctness and the encrypt 
		and decrypt routines check that an appropriate key has been set up. The 
		functions hence return a success or failure value.&nbsp; For the variable 
		block size version there is a call to set the block size, a value of 16 
		being assumed if this is not set (i.e. the AES standard block size).</font></p>
		<p><font color="#000000" face="Arial">The source code for the algorithm 
		is in C but there is a C++ interface as well.&nbsp; The main files are:</font></p>
		<div align="center">
			<center>
			<table id="AutoNumber1" border="0" bordercolor="#111111" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="79%">
				<tr>
					<td width="18%"><font face="Arial">aes.h</font></td>
					<td width="82%"><font face="Arial">The main C header file for 
					the cipher</font></td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aescpp.h</font></td>
					<td width="82%"><font face="Arial">A C++ header file that provides 
					a class interface for the cipher</font></td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aesopt.h</font></td>
					<td width="82%"><font face="Arial">The header file for setting 
					compilation options (also contains shared code)</font></td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">uitypes.h</font></td>
					<td width="82%"><font face="Arial">A header file for defining 
					unsigned integer types of specified length</font></td>
				</tr>
				<tr>
					<td width="18%">&nbsp;</td>
					<td width="82%">&nbsp;</td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aescrypt.c</font></td>
					<td width="82%"><font face="Arial">encryption and decryption 
					for block and key sizes of 16, 24 and 32 bytes</font></td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aescrypt.asm</font></td>
					<td width="82%"><font face="Arial">x86 assembler code for AES 
					encryption and decryption (16 byte blocks)</font></td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aeskey.c</font></td>
					<td width="82%"><font face="Arial">key schedule generation for&nbsp; 
					block and key sizes of 16, 24 and 32 bytes</font></td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aestab.c</font></td>
					<td width="82%"><font face="Arial">The file that implements 
					the tables needed by the cipher</font></td>
				</tr>
				<tr>
					<td width="18%">&nbsp;</td>
					<td width="82%">&nbsp;</td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aescrypp.c</font></td>
					<td width="82%"><font face="Arial">encryption and decryption 
					for block and key sizes of 16, 20, 24, 28 and 32 bytes</font></td>
				</tr>
				<tr>
					<td width="18%"><font face="Arial">aeskeypp.c</font></td>
					<td width="82%"><font face="Arial">key schedule generation for&nbsp; 
					block and key sizes of 16, 20 24, 28 and 32 bytes</font></td>
				</tr>
			</table>
			</center></div>
		<p><font color="#000000" face="Arial">These files are in the zip archive
		<a href="../../cryptography_technology/rijndael/aessrc.zip">aessrc.zip</a>.&nbsp; The full Microsoft project for 
		the code development is in the archive <a href="../../cryptography_technology/rijndael/aestest.zip">aestest.zip</a><font color="#000000"> 
		(this file includes the source code files in aessrc.zip). </font></font>
		</p>
		<h2><font color="#0000FF" face="Arial">Algorithm Code in Pentium Family 
		Assembler</font></h2>
		<p><font face="Arial">There is an assembler code source file for the encryption 
		and decryption subroutines for the Pentium family (Pentium II/III/IV). This 
		version only implement the standard block size of 16 bytes (128 bits) but 
		is 20% faster than the C/C++ code. It achieves a maximum speed with a fully 
		primed processor cache of about 280 cycles/block, which is around 58 Mbytes/second 
		on a 1GHz processor.&nbsp; Note also that it uses the Microsoft VC++ register 
		saving conventions and may need to be modified to work with other C/C++ 
		compilers.&nbsp; The code uses the NASM assembler available
		<font color="#FF0000"><a href="http://nasm.sourceforge.net/">
		<font color="#000000">here</font></a><font color="#000000"> and integrates 
		with the C/C++ code for key scheduling and table generation.</font></font></font></p>
		<p><font face="Arial">If you need still more speed Helger Lipmaa has a commercial 
		version <a href="http://home.cyber.ee/helger/implementations/">here</a> 
		that achieves around 229 cycles/block.</font></p>
		<h2><font color="#0000FF" face="Arial">Test Vectors</font></h2>
		<p><font face="Arial">This <a href="../../cryptography_technology/rijndael/aesdvec.zip">zip file</a> contains a 
		full set of round values for each of the 25 block and key length combinations 
		from 128, 160, 192, 224 and 256 bits for one input block and one key value.</font></p>
		<p><font face="Arial">These zip files contain the
		<a href="../../cryptography_technology/rijndael/rijn.tv.ecbvk.zip">variable key</a> and
		<a href="../../cryptography_technology/rijndael/rijn.tv.ecbvt.zip">variable text</a> test vectors for the same 
		25 combinations of block and key lengths</font></p>
		<p><font face="Arial">These zip files contain proposed new
		<a href="../../cryptography_technology/rijndael/rijn.tv.ecbnk.zip">variable key</a> and
		<a href="../../cryptography_technology/rijndael/rijn.tv.ecbnt.zip">variable text</a> test vectors proposed by Paulo 
		Barreto and myself as replacements for the current versions.&nbsp; These 
		are designed to assist in finding errors in byte order within input, output 
		and key blocks.</font></p>
		<h2><font color="#0000FF" face="Arial">Dynamic Link Libraries</font></h2>
		<p><font face="Arial">The code can be compiled into a Dynamic Link Library 
		and the file <a href="../../cryptography_technology/rijndael/aesdll.zip">aesdll.zip</a> contains a DLL for the 
		AES standard (fixed) block size of 16 bytes. Other versions of this DLL 
		can be compiled from the source code if needed.</font></p>
		<p><font face="Arial">This DLL can be called from any language that supports 
		DLL use, including both Microsoft Visual Basic and Visual Basic for Applications 
		(VBA).&nbsp; This <a href="../../cryptography_technology/rijndael/vbaxam.zip">zip file</a> provides an example 
		of use in VBA hosted in a Microsoft Word document that contains example 
		VBA source code as text and as a macro that can be run to show its operation.</font></p>
		<h2><font color="#0000FF" face="Arial">Example Application</font></h2>
		<p><font face="Arial">I am often asked for an example of how to use the 
		algorithm code on this page so I have now produced a simple file console 
		mode encryption application. The file aesxam.c encrypts a file with a user 
		provided key using a command line as follows:</font></p>
		<p><font face="Arial">&nbsp;&nbsp;&nbsp; aesxam input_file_name output_file_name 
		[d|e] hexadecimal_key_digits</font></p>
		<p><font face="Arial">For example:</font></p>
		<p><font face="Arial">&nbsp;&nbsp;&nbsp; aesxam aes.c aes.enc e 0123456789abcdeffedcba9876543210</font></p>
		<p><font face="Arial">will encrypt aes.c to aes.enc with the key given. 
		The file is then decrypted by using &#39;d&#39; instead of &#39;e&#39;.&nbsp;
		<a href="../../cryptography_technology/rijndael/aesxam.zip">Here</a> is a zip file containing the example source 
		code and a binary executable for Windows in console mode.&nbsp; This is 
		an example application that is not intended for real use, I believe it works 
		correctly but I cannot guarantee this. Hence if you do use it, you do so 
		at your own risk. </font></p>
		<h2><font color="#0000FF" face="Arial">A Note on Algorithm Speed</font></h2>
		<p><font face="Arial">The timing values quoted here are the best available 
		(i.e. the fastest) from this code and are not representative of the sort 
		of speed that will be achieved in practice, especially when small numbers 
		of blocks are being processed.&nbsp; This is because the way I do the timing 
		is by running the code on a particular set of input values before I time 
		it using the same values.&nbsp; I am hence giving the speed achieved with 
		the processor&#39;s data cache fully primed.&nbsp; </font></p>
		<p><font face="Arial">In encryption (or decryption) operations involving 
		a small number of blocks the processor cache will not necessarily be primed 
		and this will mean that the performance will be severely degraded compared 
		with the figures given here.&nbsp; However as the number of blocks being 
		encrypted increases, the processor cache progressively accumulates values 
		from the tables and the performance for large numbers of blocks becomes 
		close to the best figures given here.</font></p>
		<p><font face="Arial">For the highest speed, this code uses a maximum of 
		20 tables of 256 32-bit words, a total of 20Kbytes of data.</font></p>
		<p><font face="Arial">I don&#39;t offer the other test vectors because the files 
		are too large.</font></p>
		<p><font face="Arial">All the source code used to create the application 
		is available on this page so you can check it out yourself.&nbsp; They are 
		also quite simple since both the applications and the AES algorithm are 
		not difficult to understand and this makes them useful for those who believe 
		that security is best achieved by keeping things simple.</font></p>
		<h2><font color="#0000FF" face="Arial">Code Use</font> </h2>
		<p><font color="#000000" face="Arial">I am happy for this code to be used 
		without payment provided that I don&#39;t carry any risks as a result.&nbsp; 
		I would appreciate an appropriate acknowledgement of the source of the code 
		if you do use it in a product or activity provided to third parties.&nbsp;&nbsp; 
		I would also be grateful for feedback on how the code is being used, any 
		problems you encounter, any changes or additions that are desirable for 
		particular processors and any more general improvements you would like to 
		see (no promises mind!).</font> </p>
		<h2><font color="#0000FF" face="Arial">Acknowledgements</font></h2>
		<p>I would like to thank the following individuals who have made contributions 
		in the development of this code:</p>
		<dl>
			<dd>Karl M. Syring.<br>Eugene Mayevski<br><font color="#000000">Frank 
			Yellin<br>Chris Heath<br></font>Peter Gutmann<br>Rainer Nausedat<br>
			Ganapathi Bhat<br>Kevin Steves<br>Theo de Raadt<br>David Wagner<br>Malcolm 
			Smith<br>Helger Lipmaa<br>David Hopwood<br>Nigel Metheringham</dd>
		</dl>
		<hr>
		<p><em><a href="../../index.php"><font face="Arial" size="2">Back to Brian 
		Gladman&#39;s Home Page</font></a><font face="Arial" size="2">.</font></em></p>
		</td>
	</tr>
</table>

</body>

</html>
