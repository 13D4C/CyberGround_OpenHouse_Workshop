def reverse_transform(data):
    # Step 4 (Reverse): Convert to ASCII
    ascii_values = [ord(char) for char in data]

    # Step 3 (Reverse): XOR with the Repeating Key
    key = [5, 12, 3]
    xored = []
    for i, value in enumerate(ascii_values):
        xored.append(value ^ key[i % len(key)])

    # Step 2 (Reverse): Swap Adjacent Values Back
    swapped = []
    for i in range(0, len(xored), 2):
        if i + 1 < len(xored):
            swapped.append(xored[i+1])
            swapped.append(xored[i])
        else:
            swapped.append(xored[i])

    # Step 1 (Reverse): Subtract the Key and Convert to Characters
    result = "".join([chr(val - 10) for val in swapped]) 

    return result

encoded = "[_hSymnphi}{\&l~{zulx0)96=" # ผลลัพธ์จากโจทย์
decoded = reverse_transform(encoded)
print("Decoded:", decoded)