# RustOffensive

## Summary

* [Overview](#overview)
* [Contents](#contents)
* [Resources](#resources)
* [Requirements](#requirements)
* [Compile](#compile)
    * [Compiling the Project](#compiling-the-project)
    * [Adding Destination Architectures](#adding-destination-architectures)
    * [Compiling for a Specific Architecture](#compiling-for-a-specific-architecture)
* [How to get started](#how-to-get-started)
* [Contributing to RustOffensive](#contributing-to-RustOffensive)
* [Credits / References / Thanks / Motivation](#credits--references--thanks--motivation)

## Overview

RustOffensive is a repository that houses various tools and projects related to Red Team operations, developed in Rust. This repository is dedicated to providing effective and efficient tools for security professionals and penetration testers who want to perform security assessments and intrusion tests.

## Contents

The repository is organized into several projects, each with its own purpose and functionality. Here are some examples of the projects included:

1. [**APC Injection**](/APC_Injection)
   - This project exploits the Asynchronous Code Injection (APC) technique to execute malicious code in target processes.

2. [**API Hooking**](/API_Hooking)
    - Demonstration on API hooking which is a programming technique that allows you to intercept and manipulate calls to Windows API functions.
   
3. [**Anti-Debug**](/Anti_Debug)
    - Techniques Anti-Debugging.

4. [**API Hammering**](/API_Hammering)
    - API Hammering consists of carrying out various actions to delay the malware.

5. [**Anti-Analysis**](/Anti_Analysis)
    - Techniques Anti-Analysis.

6. [**Binary Info**](/Binary_Info)
    - This is just a simple demonstration in case you want to include metadata in your Rust binary or change the associated icon.

7. [**Block DLL Policy**](/Block_DLL_Policy)
    - Avoiding the loading of DLLS not signed by Microsoft.

8. [**Create Driver**](/Create_Driver)
    - It's a project to demonstrate how to create a simple driver using rust.

9. [**Create DLL**](/Create_DLL)
    - It's a project to demonstrate how to create dll using rust.

10. [**Callback Code Execution**](/Callback_Code_Execution)
    - Demonstration of shellcode execution via callback.

11. [**Create UEFI**](/Create_UEFI)
    - It's a project to demonstrate how to create uefi using rust.

12. [**Compile Encrypt String**](/Compile_Encrypt_String)
    - Encrypting strings at compile time and decrypting them at runtime.

13. [**Extract WIFI**](/Extract_Wifi)
    - Extracting WIFI passwords using winapis is a customized form of the netsh command.

14. [**Early Bird APC Injection**](/Early_Bird_APC_Injection)
    - It focuses on a variation of APC injection, executing code before the main process starts.

15. [**Encryption (Shellcode)**](/Encryption_Shellcode)
    - Encrypting / Decrypting a shellcode using AES and RC4.

16. [**Enumeration Process**](/Enumeration_Processes)
    - Enumerating processes with Rust.

17. [**Enable All Tokens**](/Enable_All_Tokens)
    - Enabling all privilege tokens.

18. [**Execute Command**](/Execute_Command)
    - Running commands with Rust.

19. [**Hells / Halos / Tartarus Gate**](/Hells_Halos_Tartarus_Gate)
    - Recovering ssn through the Hells / Halos / Tartarus Gate techniques

20. [**IAT Obfuscation**](/IAT_Obfuscation)
    - IAT obfuscation by replacing GetProcAddress and GetModuleHandle.

21. [**IAT Camouflage**](/IAT_Camouflage)
    - Technique for exporting APIs (without executing them) in order to camouflage the IAT and avoid a malicious appearance.

22. [**LdrLoadDll Unhook**](/LdrLoadDll_Unhook)
    - A proof of concept to inject a springboard to bypass EDR hooks and use LdrLoadDll.

23. [**Local Payload Execution**](/Local_Payload_Execution)
    - This project addresses the direct execution of malicious payloads in a system's local environment.

24. [**Local Mapping Injection**](/Local_Mapping_Injection)
    - Performing malicious code injection via memory mapping into local processes.

25. [**Local Function Stomping Injection**](/Local_Function_Stomping_Injection)
    - It focuses on replacing locally running functions with malicious code, changing their default behavior.

26. [**Local Thread Hijacking**](/Local_Thread_Hijacking)
    - This project deals with hijacking the threads of processes running on the local system to execute malicious code.

27. [**Minidump-rs**](/Minidump-rs)
    - Dumping the lsass.exe process.

28. [**Module Stomping**](/Module_Stomping)
    - The Module Stomping technique focuses on injecting a shellcode into the entrypoint of the mapped or loaded DLL.

29. [**NTDLL Unhooking**](/NTDLL_Unhooking)
    - Running NTDLL Unhooking through a suspended process.

30. [**Named Pipe Server / Client**](/Named_Pipe_Client_Server)
    - A simple project showing how we can communicate between processes using named pipes.

31. [**Module Overloading**](/Module_Overloading)
    - Module Overloading is a technique that maps a target DLL and replaces its contents with an EXE / DLL file and then executes it.

32. [**Obfuscation Shellcode**](/Obfuscation)
    - Shellcode obfuscation using IPV4, IPV6, MAC and UUIDs.

33. [**PPID Spoofing**](/PPID_Spoofing)
    - Demonstrating the PPID Spoofing technique.

34. [**Parsing PE Headers**](/Parsing_PE)
    -  The code is focused on parsing the PE header of any Windows executable file.

35. [**Patch ETW**](/Patch_ETW)
    - Patching ETW.

36. [**Patch AMSI**](/Patch_AMSI)
    - Patching AMSI.

37. [**Payload Execution Control**](/Payload_Execution_Control)
    - Controlling payload execution through Mutex, Events and Semaphores.

38. [**Process Argument Spoofing**](/Process_Argument_Spoofing)
    - Exploits the technique of masking or altering the arguments of a process to hide malicious activity.
   
39. [**Process Injection (DLL)**](/Process_Injection_DLL)
    - It focuses on injecting dynamic link libraries (DLL) into running processes to execute malicious code.

40. [**Process Injection (Shellcode)**](/Process_Injection_Shellcode)
    - It exploits shellcode injection directly into running processes to control or execute malicious tasks.

41. [**Payload Placement**](/Payload_Placement)
    - Storing a shellcode in the .text section and then executing it.

42. [**Process Hypnosis**](/Process_Hypnosis)
    - This technique focuses on controlling the execution flow of a program that is being debugged and obtaining relevant information from it, such as the creation of new threads, loaded modules, exceptions and much more. Or even execute a shellcode.

43. [**Payload Execution Fibers**](/Payload_Execution_Fibers)
    - Running shellcode using Fibers.

44. [**Process Ghosting**](/Process_Ghosting)
    - Loading a PE file using the Process Ghosting technique.

45. [**Process Herpaderping**](/Process_Herpaderping)
    - Obscuring the intentions of a process by modifying the contents of the disk after the image has been mapped.

46. [**Remote Thread Hijacking**](/Remote_Thread_Hijacking)
    - It addresses the hijacking of threads in remote system processes to carry out malicious actions.

47. [**Remote Function Stomping Injection**](/Remote_Function_Stomping_Injection)
    - It exploits the substitution of functions in remote systems to carry out malicious activities.

48. [**Remote Mapping Injection**](/Remote_Mapping_Injection/)
    - Performing malicious code injection via memory mapping into remote processes.

49. [**Registry Shellcode**](/Registry_Shellcode)
    - Writing and reading shellcode to the Windows Registry.

50. [**Remove CRT**](/Remove_CRT)
    - It focuses on removing the CRT (C Runtime Library) from the binary.

51. [**Request Shellcode**](/Request_Shellcode)
    - Retrieving shellcode from HTTP requests using Rust.

52. [**Self Deletion**](/Self_Deletion)
    - Technique for deleting the running binary.

53. [**String Hashing**](/String_Hashing)
    - Creating string hashes to perform hiding.

54. [**Syscalls**](/Syscalls)
    - Running direct and indirect syscall.

55. [**Threadless Injection**](/Threadless_Injection)
    - Performing Threadless Injection using Rust.

56. [**WMI**](/WMI)
    - Running WMI (Windows Management Instrumentation) queries.

57. [**WebAssembly Shellcode**](/WebAssembly_Shellcode)
    - Running shellcode through WebAssembly.

## Resources

- Each individual project can include a features section that details the project's main features and functionalities.
- You can view the installation instructions, usage and examples for each project in their respective directories.

## Requirements

- [Rust](https://www.rust-lang.org/): Rust is a modern and secure programming language used to develop the tools in this repository.
- [Cargo](https://doc.rust-lang.org/cargo/): Cargo is Rust's package manager and compiler, essential for compiling and running projects.

## Compile

### Compiling the Project
To start the compilation, use the following command:

```sh
cargo build --release
```

### Adding Destination Architectures
If you are using a different operating system or need to compile for a specific architecture, you can list all available target architectures with the following command:

```sh
rustup target list
```

Once you have identified the desired target architecture, add it using rustup:

```sh
rustup target add <arch>
```
Replace <arch> with the desired architecture, such as x86_64-pc-windows-gnu.

### Compiling for a Specific Architecture

Then compile the project for the specific architecture:

```sh
cargo build --release --target <arch>
```

## How to get started

Follow these steps to start using the projects in this repository:

1. Clone this repository on your local machine:
   ```sh
   git clone https://github.com/vighneshx/RustOffensive.git
   ```
2. Navigate to the directory of the project you are interested in:
   ```sh
   cd RustOffensive/<name-project>
   ```
3. Follow the project-specific installation and usage instructions as described in the README inside this directory.


## Contributing to RustOffensive
To contribute to RustOffensive, follow these steps:

1. Fork this repository.
2. Create a branch: ```git checkout -b <branch_name>```.
3. Make your changes and confirm them: ```git commit -m '<commit_message>'```.
4. Send to the original branch: ```git push origin <project_name> / <local>```.
5. Create the pull request.

Alternatively, consult the GitHub documentation on how to create a pull request.

## Developed By

* https://github.com/vighneshx
