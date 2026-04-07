<div class="space-y-4">
    <!-- Card Header -->
    <div class="bg-white shadow rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-900">Daftar Siswa</h1>
        <p class="text-gray-600 mt-1">Menampilkan daftar siswa yang terdaftar</p>
    </div>
    <!-- Students Table -->
    <div class="bg-white shadow rounded-lg p-6">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-4 text-left font-semibold text-gray-900">Nomor</th>
                    <th class="py-3 px-4 text-left font-semibold text-gray-900">Nama</th>
                    <th class="py-3 px-4 text-left font-semibold text-gray-900">NIS</th>
                    <th class="py-3 px-4 text-left font-semibold text-gray-900">Kelas</th>
                    <th class="py-3 px-4 text-left font-semibold text-gray-900">Nomor Telepon</th>
                    <th class="py-3 px-4 text-right font-semibold text-gray-900">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php if (isset($students) && count($students) > 0): ?>
                    <?php foreach ($students as $index => $student): ?>
                    <tr>
                        <td class="py-4 px-4"><?= $index + 1 ?></td>
                        <td class="py-4 px-4 font-medium text-gray-900"><?= htmlspecialchars($student['name']) ?></td>
                        <td class="py-4 px-4 text-gray-700"><?= htmlspecialchars($student['nis']) ?></td>
                        <td class="py-4 px-4 text-gray-700"><?= htmlspecialchars($student['class']) ?></td>
                        <td class="py-4 px-4 text-gray-700"><?= htmlspecialchars($student['phone']) ?></td>
                        <td class="py-4 px-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="/students/<?= $student['id'] ?>" class="text-green-600 hover:text-green-900 font-medium">Detail</a>
                                <a href="/students/<?= $student['id'] ?>/edit" class="text-yellow-600 hover:text-yellow-900 font-medium">Edit</a>
                                <a href="/students/<?= $student['id'] ?>/delete" class="text-red-600 hover:text-red-900 font-medium" onclick="return confirm('Hapus siswa ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-12 px-4 text-center text-gray-500">Belum ada data siswa.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

