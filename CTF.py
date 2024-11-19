def complex_transform(data):
    # Step 1: Convert to ASCII and Add a Key
    ascii_values = [ord(char) + 10 for char in data] # Add 10 to each character's ASCII value
    
    # Step 2: Swap Adjacent Values
    swapped = []
    for i in range(0, len(ascii_values), 2):
        if i + 1 < len(ascii_values):
            swapped.append(ascii_values[i+1])
            swapped.append(ascii_values[i])
        else:
            swapped.append(ascii_values[i])
    
    # Step 3: XOR with a Repeating Key
    key = [5, 12, 3]  # Repeating key for XOR
    xored = []
    for i, value in enumerate(swapped):
        xored.append(value ^ key[i % len(key)]) 
    
    # Step 4: Convert back to Characters
    result = "".join([chr(val) for val in xored])
    
    return result

key = "[_hSymnphi}{\&l~{zulx0)96="
encoded = complex_transform(key)
print("Encoded:", encoded)