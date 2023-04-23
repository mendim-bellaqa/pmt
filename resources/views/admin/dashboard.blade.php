@extends('layouts.app')

@section('content')

  <div class="container mx-auto px-6 py-10 text-black">
    <main class="bg-gray-100">
      <div class="container mx-auto px-6 py-10">
        <h1 class="text-4xl font-bold  mb-8">Dashboard</h1>

        <a href="/projects/create">
        <button class="flex items-center justify-center px-8 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Create a project
        </button>
        </a>
          <!-- About Us Section -->
          <section class="py-20 ">
          <div class="container mx-auto px-6 py-10">
          <h1 class="text-4xl font-bold  mb-8">All Projects</h1>
  
          @if(session('success'))
              <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold">Success!</strong>
                  <span class="block sm:inline">{{ session('success') }}</span>
                  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                      <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 01.708 0l4.242 4.243a.5.5 0 010 .707l-4.242 4.243a.5.5 0 01-.708-.707l3.536-3.536-3.536-3.536a.5.5 0 010-.707zM5.652 5.652a.5.5 0 00-.708 0L.702 9.895a.5.5 0 000 .707l4.242 4.243a.5.5 0 00.708-.707L1.707 10l3.536-3.536a.5.5 0 000-.707z"/></svg>
                  </span>
              </div>
          @endif

          <table class="w-full text-slate-900	 " style="color: black !important;">
            <thead>
              <tr>
                <th class="border-b-2 border-gray-300 py-4">#</th>
                <th class="border-b-2 border-gray-300 py-4">Name</th>
                <th class="border-b-2 border-gray-300 py-4">Description</th>
                <th class="border-b-2 border-gray-300 py-4">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($projects as $project)
              <tr>
                <td class="border-b border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border-b border-gray-300 px-4 py-2">{{ $project->name }}</td>
                <td class="border-b border-gray-300 px-4 py-2">{{ $project->description }}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5 font-medium">
                    <a href="{{ route('projects.edit', $project->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                    </form>
                    @if(auth()->user()->role == 'admin')
                        <a href="{{ route('tasks.create', $project->id) }}" class="btn btn-primary">Add Task</a>
                    @endif

                </td>

                <template>
                  <div>
                    <button class="button is-danger" @click="showDeleteModal = true">Delete</button>
                    <delete-confirmation-modal :show="showDeleteModal" @confirmed="deleteProject" @canceled="showDeleteModal = false"></delete-confirmation-modal>
                  </div>
                </template>

                <script>
                import DeleteConfirmationModal from './DeleteConfirmationModal.vue';

                export default {
                  components: {
                    DeleteConfirmationModal,
                  },
                  data() {
                    return {
                      showDeleteModal: false,
                    };
                  },
                  methods: {
                    deleteProject() {
                      // Perform delete operation here
                      axios.delete(`/admin/projects/${projectId}`)
                        .then(() => {
                          this.$router.push({ name: 'admin.dashboard' });
                          this.$toast.success('Project deleted successfully.');
                        })
                        .catch(() => {
                          this.$toast.error('Failed to delete project.');
                        });
                    },
                  },
                };
                </script>


              @endforeach
            </tbody>
          </table>
        </div>

          </section>
      </div>
    </main>
  </div>

  <script>
export default {
  props: {
    show: {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    confirmDelete() {
      this.$emit('confirmed');
    },
    cancelDelete() {
      this.$emit('canceled');
    },
  },
};
</script>
@endsection