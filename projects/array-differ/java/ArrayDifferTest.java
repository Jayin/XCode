package com.xcode;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class ArrayDifferTest {

	public static Integer[] array_diff(Integer[]... arrays) {
		if (arrays.length <= 1)
			return arrays[0];
		for (Integer[] a : arrays) {
			Arrays.sort(a);
		}
		List<Integer> list = new ArrayList<Integer>();
		for(int i=0;i<arrays[0].length;i++){
			list.add(arrays[0][i]);
		}
		for (int i = 1; i < arrays.length; i++) {
			for(int j=0;j<arrays[i].length;j++){
				if(Arrays.binarySearch(arrays[0], arrays[i][j]) != -1){
					list.remove(new Integer(arrays[i][j]));
				}
			}
		}
		return list.toArray(new Integer[]{});

	}
}
